const { DateTime } = require('luxon');
const { EleventyHtmlBasePlugin } = require('@11ty/eleventy');
const pluginRss = require('@11ty/eleventy-plugin-rss');
const pluginSyntaxHighlight = require('@11ty/eleventy-plugin-syntaxhighlight');
const markdownIt = require('markdown-it');

const md = new markdownIt({
  html: true,
});

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

  // Parse excerpts from contents
  eleventyConfig.setFrontMatterParsingOptions({
    excerpt: true,
    // Optional, default is "---"
    // excerpt_separator: '<!-- excerpt -->',
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
  eleventyConfig.addFilter('head', (array, n, offset = 0) => {
    if (!Array.isArray(array) || array.length === 0) {
      return [];
    }
    if (n < 0) {
      if (offset) {
        return array.slice(n - offset, offset * -1);
      }
      return array.slice(n);
    }
    return array.slice(offset, n + offset);
  });

  // Return the smallest number argument
  eleventyConfig.addFilter('min', (...numbers) => {
    return Math.min.apply(null, numbers);
  });

  // Return all the tags used in a collection
  eleventyConfig.addFilter('getAllTags', (collection) => {
    let tagSet = new Set();
    let tagCount = {};
    for (let item of collection) {
      (item.data.tags || []).forEach((tag) => {
        tagCount[tag] = tagCount[tag] ? tagCount[tag] + 1 : 1;
        tagSet.add(tag);
      });
    }
    return (
      // At least one tag, sort by count, then alphabetically
      Array.from(tagSet)
        .filter((tag) => tagCount[tag] > 1)
        .sort() // alfa(7), golf(3), xray(7)
        .reverse() // xray(7), golf(3), alfa(7)
        .sort((a, b) => tagCount[a] - tagCount[b]) // golf(3), xray(7), alfa(7)
        .reverse() // alfa(7), xray(7), golf(3)
    );
  });

  // Return all the tags used in a collection, except some
  eleventyConfig.addFilter('filterTagList', (tags) => {
    return (tags || []).filter(
      (tag) => ['all', 'nav', 'posts'].indexOf(tag) === -1,
    );
  });

  // Get the posts by author
  eleventyConfig.addFilter('getPostsByAuthor', (posts, author) => {
    return posts.filter((post) => post.data.authors.includes(author));
  });

  // Get the author object
  eleventyConfig.addFilter('getAuthor', (authors, label) => {
    return authors.filter((author) => author.key === label)[0];
  });

  // Render Markdown content
  eleventyConfig.addFilter('markdown', (content) => {
    return md.render(content);
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
