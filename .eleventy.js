const { DateTime } = require('luxon');
const { EleventyHtmlBasePlugin } = require('@11ty/eleventy');
const pluginRss = require('@11ty/eleventy-plugin-rss');
const pluginSyntaxHighlight = require('@11ty/eleventy-plugin-syntaxhighlight');
const markdownIt = require('markdown-it');

const markdownOptions = {
  html: true,
  breaks: true,
  linkify: true,
  typographer: true,
};

const md = new markdownIt(markdownOptions);

/**
 * Based on Eleventy Base Blog v8
 * @see https://github.com/11ty/eleventy-base-blog/tree/main
 */
module.exports = function (eleventyConfig) {
  // Copy over various static files
  eleventyConfig.addPassthroughCopy({
    './public/': '/',
    './node_modules/prismjs/themes/prism-okaidia.css': '/css/prism-okaidia.css',
    'src/**/*.(gif|ico|jpg|png|svg|webp|woff|woff2)': '/',
  });

  // Run Eleventy when these files change:
  // https://www.11ty.dev/docs/watch-serve/#add-your-own-watch-targets
  // Watch for CSS changes
  eleventyConfig.addWatchTarget('./src/_scss/');

  // Official plugins
  eleventyConfig.addPlugin(pluginRss);
  eleventyConfig.addPlugin(pluginSyntaxHighlight, {
    preAttributes: { tabindex: 0 },
  });
  eleventyConfig.addPlugin(EleventyHtmlBasePlugin);

  // Pass markdown options through to MarkdownIt
  eleventyConfig.setLibrary('md', markdownIt(markdownOptions));

  // Add Markdown filter using the same options
  eleventyConfig.addFilter('markdown', (content) => {
    return md.render(content);
  });

  // Posts by tag
  // @see https://lea.verou.me/blog/2023/11ty-indices/#dynamic-postsbytag-collection
  eleventyConfig.addCollection('postsByTag', (collectionApi) => {
    const posts = collectionApi.getFilteredByTag('blog');
    let tags = {};
    for (let post of posts) {
      for (let tag of post.data.tags) {
        if (tag === 'blog') continue;
        tags[tag] ??= [];
        tags[tag].push(post);
      }
    }
    // sort and restructure the tags
    tags = Object.fromEntries(
      Object.entries(tags).sort((a, b) => b[1].length - a[1].length),
    );
    return tags;
  });

  // Posts by month
  eleventyConfig.addCollection('postsByMonth', (collectionApi) => {
    const posts = collectionApi.getFilteredByTag('blog').reverse();
    const months = {};
    for (let post of posts) {
      let key = DateTime.fromJSDate(post.date, {
        zone: 'utc',
      }).toFormat('yyyy-LL'); // YYYY-MM
      months[key] ??= [];
      months[key].push(post);
    }
    return months;
  });

  // Posts by year
  eleventyConfig.addCollection('postsByYear', (collectionApi) => {
    const posts = collectionApi.getFilteredByTag('blog').reverse();
    const years = {};
    for (let post of posts) {
      let key = post.date.getFullYear();
      years[key] ??= [];
      years[key].push(post);
    }
    return years;
  });

  // Date formatting (human readable)
  // Formatting tokens for Luxon: https://moment.github.io/luxon/#/formatting?id=table-of-tokens
  eleventyConfig.addFilter('readableDate', (dateObj, format, zone) => {
    return DateTime.fromJSDate(dateObj, { zone: zone || 'utc' }).toFormat(
      format || 'DDD',
    );
  });

  // Date formatting (machine readable)
  // dateObj input: https://html.spec.whatwg.org/multipage/common-microsyntaxes.html#valid-date-string
  eleventyConfig.addFilter('htmlDateString', (dateObj) => {
    return DateTime.fromJSDate(dateObj, { zone: 'utc' }).toFormat('yyyy-LL-dd');
  });

  // Get the first `n` elements of a collection.
  eleventyConfig.addFilter('head', (array, n) => {
    if (!Array.isArray(array) || array.length === 0) {
      return [];
    }
    if (n < 0) {
      return array.slice(n);
    }
    return array.slice(0, n);
  });

  // Return the smallest number argument
  eleventyConfig.addFilter('min', (...numbers) => {
    return Math.min.apply(null, numbers);
  });

  // Return all the tags used in a collection, except some
  eleventyConfig.addFilter('filterTagList', (tags) => {
    return (tags || []).filter((tag) => ['all', 'blog'].indexOf(tag) === -1);
  });

  // Get the posts by author
  eleventyConfig.addFilter('getPostsByAuthor', (posts, author) => {
    return posts.filter((post) => post.data.authors.includes(author));
  });

  // Get the author object
  eleventyConfig.addFilter('getAuthor', (authors, label) => {
    return authors.filter((author) => author.key === label)[0];
  });

  // Current year shortcode
  eleventyConfig.addShortcode('year', () => `${new Date().getFullYear()}`);

  return {
    dir: {
      input: 'content',
      output: 'dist',
    },
  };
};
