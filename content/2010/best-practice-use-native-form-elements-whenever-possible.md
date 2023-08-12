---
title: "Best Practice: Use native form elements whenever possible"
created: 2010-06-22
categories: 
  - professional
tags: 
  - accessibility
  - bestpractices
  - css
  - forms
  - html
authors: 
  - scott
---

_I just wrote the following for our marketing team to understand why we recommend not styling forms. If you have any feedback, I would love to hear it in the comments section!_

Our recommendation is that only minimal styling be applied to form elements. When possible, using the native form elements is the most accessible solution. When we do apply styles, we should make sure that it degrades gracefully, and doesn't cause problems in older browsers. Clients need to understand that making forms look identical across all browsers is NOT possible. This is a limitation inherent to the browsers themselves. (see the further reading below, in particular, Eric Meyer's post.)

In the past, we have tried to promise cross-browser styling, such as by using the Uniform jQuery library, and have found, without exception, that this adds a dramatic amount of time to the front-end development of the site, due to the difficulties of forcing styles onto elements that weren't built to support those styles. If a client insists on heavy form styles, we should make sure to charge an appropriate amount to cover the increased development and QA time.

Some things are relatively easy to style, such as plain text inputs and submit buttons. Other things, such as drop-down menus, radio buttons, or file select inputs, are nearly impossible to style. Since we can't say for sure what works and what doesn't, we're left with a fairly vague recommendation to use "minimal styling" on form elements. In practice, this translates to borders, padding, and background colors on text inputs, though even these will look somewhat different across browsers. We can also do pretty much anything to submit buttons, because we can replace them with images -- though again, there are difficulties, and the native buttons are more accessible and recognizable.

**Further Reading:**

- [Eric Meyer: Formal Weirdness](http://meyerweb.com/eric/thoughts/2007/05/15/formal-weirdness/)
- [Why styling form controls with CSS is problematic](http://www.456bereastreet.com/archive/200705/why_styling_form_controls_with_css_is_problematic/)
- [Form styling and accessibility](http://www.brucelawson.co.uk/2009/standards-next-cognition-and-accessibility/)
- [Advice on overriding default form elements](http://www.zeroedandnoughted.com/?p=14)
