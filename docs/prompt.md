Project Path: /home/ramees/progs/php/sora

Source Tree:

```
sora
├── tailwind.config.js
├── public
│   ├── images
│   │   └── sora-login.jpg
│   ├── css
│   │   ├── imports.css
│   │   └── styles.css
│   └── index.php
├── vendor
├── tests
│   └── sample.php
├── docs
├── src
│   ├── Helpers
│   │   └── Token.php
│   ├── Config
│   │   ├── Database.php
│   │   ├── sample.php
│   │   ├── sora.sql
│   │   └── init.php
│   ├── Core
│   │   ├── Router.php
│   │   └── Application.php
│   ├── Controllers
│   │   ├── HomeController.php
│   │   ├── PostController.php
│   │   ├── sample.php
│   │   └── UserController.php
│   ├── Models
│   │   ├── UserModel.php
│   │   └── PostModel.php
│   └── Views
│       ├── login.html
│       ├── signup.html
│       └── home.html
├── composer.json
└── README.md

```

`/home/ramees/progs/php/sora/tailwind.config.js`:

```````js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,php,js}',
    './**/*.{html,php,js}'],
  theme: {
    extend: {
      colors: {
          'sora-primary': '#4F46E5',
          'sora-secondary': '#818CF8',
          'sora-bg': '#F3F4F6',
          'sora-text': '#1F2937',
      }
  },
  },
  plugins: [],
}


```````

`/home/ramees/progs/php/sora/public/css/imports.css`:

```````css
@tailwind base;
@tailwind components;
@tailwind utilities;

*{
    margin: 0;
    padding:0;
    box-sizing: border-box;
}
```````

`/home/ramees/progs/php/sora/public/css/styles.css`:

```````css
*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

/*
! tailwindcss v3.4.13 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
  -webkit-tap-highlight-color: transparent;
  /* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-feature-settings: normal;
  /* 2 */
  font-variation-settings: normal;
  /* 3 */
  font-size: 1em;
  /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  letter-spacing: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
input:where([type='button']),
input:where([type='reset']),
input:where([type='submit']) {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden] {
  display: none;
}

.container {
  width: 100%;
}

@media (min-width: 640px) {
  .container {
    max-width: 640px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 768px;
  }
}

@media (min-width: 1024px) {
  .container {
    max-width: 1024px;
  }
}

@media (min-width: 1280px) {
  .container {
    max-width: 1280px;
  }
}

@media (min-width: 1536px) {
  .container {
    max-width: 1536px;
  }
}

.visible {
  visibility: visible;
}

.collapse {
  visibility: collapse;
}

.static {
  position: static;
}

.fixed {
  position: fixed;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.sticky {
  position: sticky;
}

.bottom-0 {
  bottom: 0px;
}

.right-0 {
  right: 0px;
}

.top-10 {
  top: 2.5rem;
}

.right-\[50\%\] {
  right: 50%;
}

.right-\[50\] {
  right: 50;
}

.right-\[25em\] {
  right: 25em;
}

.left-\[2em\] {
  left: 2em;
}

.right-\[2em\] {
  right: 2em;
}

.bottom-3 {
  bottom: 0.75rem;
}

.right-3 {
  right: 0.75rem;
}

.bottom-2 {
  bottom: 0.5rem;
}

.right-2 {
  right: 0.5rem;
}

.bottom-4 {
  bottom: 1rem;
}

.right-4 {
  right: 1rem;
}

.z-\[3\] {
  z-index: 3;
}

.m-4 {
  margin: 1rem;
}

.m-2 {
  margin: 0.5rem;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.my-auto {
  margin-top: auto;
  margin-bottom: auto;
}

.mx-2 {
  margin-left: 0.5rem;
  margin-right: 0.5rem;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.mb-3 {
  margin-bottom: 0.75rem;
}

.mb-4 {
  margin-bottom: 1rem;
}

.mb-6 {
  margin-bottom: 1.5rem;
}

.mr-3 {
  margin-right: 0.75rem;
}

.mt-2 {
  margin-top: 0.5rem;
}

.mt-\[1em\] {
  margin-top: 1em;
}

.mb-\[1em\] {
  margin-bottom: 1em;
}

.mr-2 {
  margin-right: 0.5rem;
}

.mt-3 {
  margin-top: 0.75rem;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.inline {
  display: inline;
}

.flex {
  display: flex;
}

.table {
  display: table;
}

.contents {
  display: contents;
}

.hidden {
  display: none;
}

.h-10 {
  height: 2.5rem;
}

.h-3 {
  height: 0.75rem;
}

.h-full {
  height: 100%;
}

.min-h-\[calc\(100vh-4rem\)\] {
  min-height: calc(100vh - 4rem);
}

.w-10 {
  width: 2.5rem;
}

.w-3 {
  width: 0.75rem;
}

.w-72 {
  width: 18rem;
}

.w-full {
  width: 100%;
}

.w-\[50\%\] {
  width: 50%;
}

.w-64 {
  width: 16rem;
}

.w-fit {
  width: -moz-fit-content;
  width: fit-content;
}

.w-max {
  width: -moz-max-content;
  width: max-content;
}

.max-w-md {
  max-width: 28rem;
}

.max-w-2xl {
  max-width: 42rem;
}

.max-w-4xl {
  max-width: 56rem;
}

.flex-none {
  flex: none;
}

.flex-grow {
  flex-grow: 1;
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.resize-none {
  resize: none;
}

.resize {
  resize: both;
}

.appearance-none {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.flex-row {
  flex-direction: row;
}

.flex-col {
  flex-direction: column;
}

.items-end {
  align-items: flex-end;
}

.items-center {
  align-items: center;
}

.justify-center {
  justify-content: center;
}

.justify-between {
  justify-content: space-between;
}

.gap-4 {
  gap: 1rem;
}

.gap-7 {
  gap: 1.75rem;
}

.gap-2 {
  gap: 0.5rem;
}

.gap-3 {
  gap: 0.75rem;
}

.space-x-1 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(0.25rem * var(--tw-space-x-reverse));
  margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-3 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(0.75rem * var(--tw-space-x-reverse));
  margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-4 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(1rem * var(--tw-space-x-reverse));
  margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-3 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.75rem * var(--tw-space-y-reverse));
}

.space-y-4 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}

.space-x-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(0.5rem * var(--tw-space-x-reverse));
  margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
}

.self-end {
  align-self: flex-end;
}

.self-center {
  align-self: center;
}

.overflow-hidden {
  overflow: hidden;
}

.overflow-y-auto {
  overflow-y: auto;
}

.rounded {
  border-radius: 0.25rem;
}

.rounded-full {
  border-radius: 9999px;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.rounded-md {
  border-radius: 0.375rem;
}

.border {
  border-width: 1px;
}

.border-2 {
  border-width: 2px;
}

.border-white {
  --tw-border-opacity: 1;
  border-color: rgb(255 255 255 / var(--tw-border-opacity));
}

.bg-black {
  --tw-bg-opacity: 1;
  background-color: rgb(0 0 0 / var(--tw-bg-opacity));
}

.bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-gray-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.bg-gray-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(156 163 175 / var(--tw-bg-opacity));
}

.bg-green-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(74 222 128 / var(--tw-bg-opacity));
}

.bg-indigo-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(79 70 229 / var(--tw-bg-opacity));
}

.bg-sora-bg {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-slate-800 {
  --tw-bg-opacity: 1;
  background-color: rgb(30 41 59 / var(--tw-bg-opacity));
}

.bg-sora-primary {
  --tw-bg-opacity: 1;
  background-color: rgb(79 70 229 / var(--tw-bg-opacity));
}

.bg-sora-secondary {
  --tw-bg-opacity: 1;
  background-color: rgb(129 140 248 / var(--tw-bg-opacity));
}

.bg-opacity-90 {
  --tw-bg-opacity: 0.9;
}

.bg-gradient-to-r {
  background-image: linear-gradient(to right, var(--tw-gradient-stops));
}

.from-sora-primary {
  --tw-gradient-from: #4F46E5 var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(79 70 229 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.to-sora-secondary {
  --tw-gradient-to: #818CF8 var(--tw-gradient-to-position);
}

.p-1 {
  padding: 0.25rem;
}

.p-4 {
  padding: 1rem;
}

.p-6 {
  padding: 1.5rem;
}

.p-2 {
  padding: 0.5rem;
}

.p-3 {
  padding: 0.75rem;
}

.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.pr-12 {
  padding-right: 3rem;
}

.pr-8 {
  padding-right: 2rem;
}

.text-center {
  text-align: center;
}

.text-right {
  text-align: right;
}

.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-xs {
  font-size: 0.75rem;
  line-height: 1rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.font-bold {
  font-weight: 700;
}

.font-medium {
  font-weight: 500;
}

.font-semibold {
  font-weight: 600;
}

.uppercase {
  text-transform: uppercase;
}

.lowercase {
  text-transform: lowercase;
}

.ordinal {
  --tw-ordinal: ordinal;
  font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
}

.leading-tight {
  line-height: 1.25;
}

.text-gray-500 {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.text-gray-700 {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.text-gray-900 {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
}

.text-indigo-600 {
  --tw-text-opacity: 1;
  color: rgb(79 70 229 / var(--tw-text-opacity));
}

.text-red-600 {
  --tw-text-opacity: 1;
  color: rgb(220 38 38 / var(--tw-text-opacity));
}

.text-sora-primary {
  --tw-text-opacity: 1;
  color: rgb(79 70 229 / var(--tw-text-opacity));
}

.text-sora-secondary {
  --tw-text-opacity: 1;
  color: rgb(129 140 248 / var(--tw-text-opacity));
}

.text-sora-text {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-opacity-80 {
  --tw-text-opacity: 0.8;
}

.underline {
  text-decoration-line: underline;
}

.placeholder-gray-500::-moz-placeholder {
  --tw-placeholder-opacity: 1;
  color: rgb(107 114 128 / var(--tw-placeholder-opacity));
}

.placeholder-gray-500::placeholder {
  --tw-placeholder-opacity: 1;
  color: rgb(107 114 128 / var(--tw-placeholder-opacity));
}

.shadow {
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-md {
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.outline {
  outline-style: solid;
}

.blur {
  --tw-blur: blur(8px);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.invert {
  --tw-invert: invert(100%);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.filter {
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.transition {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-colors {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.duration-300 {
  transition-duration: 300ms;
}

*{
  margin: 0;
  padding:0;
  box-sizing: border-box;
}

.hover\:scale-105:hover {
  --tw-scale-x: 1.05;
  --tw-scale-y: 1.05;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.hover\:bg-indigo-700:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(67 56 202 / var(--tw-bg-opacity));
}

.hover\:bg-sora-primary:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(79 70 229 / var(--tw-bg-opacity));
}

.hover\:bg-white:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.hover\:text-blue-500:hover {
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.hover\:text-green-500:hover {
  --tw-text-opacity: 1;
  color: rgb(34 197 94 / var(--tw-text-opacity));
}

.hover\:text-red-500:hover {
  --tw-text-opacity: 1;
  color: rgb(239 68 68 / var(--tw-text-opacity));
}

.hover\:text-white:hover {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.hover\:text-sora-secondary:hover {
  --tw-text-opacity: 1;
  color: rgb(129 140 248 / var(--tw-text-opacity));
}

.hover\:shadow-md:hover {
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus\:ring-2:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-sora-primary:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(79 70 229 / var(--tw-ring-opacity));
}

.focus\:ring-sora-bg:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(243 244 246 / var(--tw-ring-opacity));
}

@media (min-width: 640px) {
  .sm\:mx-0 {
    margin-left: 0px;
    margin-right: 0px;
  }

  .sm\:w-\[90\%\] {
    width: 90%;
  }

  .sm\:w-96 {
    width: 24rem;
  }

  .sm\:w-\[50\%\] {
    width: 50%;
  }

  .sm\:w-\[60\%\] {
    width: 60%;
  }

  .sm\:flex-row {
    flex-direction: row;
  }

  .sm\:flex-col {
    flex-direction: column;
  }

  .sm\:items-end {
    align-items: flex-end;
  }

  .sm\:items-center {
    align-items: center;
  }

  .sm\:justify-start {
    justify-content: flex-start;
  }

  .sm\:self-center {
    align-self: center;
  }

  .sm\:overflow-y-auto {
    overflow-y: auto;
  }

  .sm\:p-8 {
    padding: 2rem;
  }

  .sm\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .sm\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }
}

@media (min-width: 768px) {
  .md\:mx-0 {
    margin-left: 0px;
    margin-right: 0px;
  }

  .md\:block {
    display: block;
  }

  .md\:hidden {
    display: none;
  }

  .md\:w-\[80\%\] {
    width: 80%;
  }

  .md\:w-\[50\%\] {
    width: 50%;
  }

  .md\:gap-\[7em\] {
    gap: 7em;
  }

  .md\:self-end {
    align-self: flex-end;
  }

  .md\:overflow-hidden {
    overflow: hidden;
  }

  .md\:overflow-y-auto {
    overflow-y: auto;
  }

  .md\:p-12 {
    padding: 3rem;
  }

  .md\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }
}

@media (min-width: 1024px) {
  .lg\:w-\[40\%\] {
    width: 40%;
  }
}

@media (min-width: 1280px) {
  .xl\:w-\[30\%\] {
    width: 30%;
  }
}
```````

`/home/ramees/progs/php/sora/public/index.php`:

```````php
<?php 
require __DIR__."/../vendor/autoload.php";

session_start();
use Sora\Core\Application;
use Sora\Core\Router;
use Sora\Controllers\UserController;
use Sora\Controllers\HomeController;
use Sora\Controllers\PostController;
$router = new Router();
$app = new Application($router);

$app->router->get('/', [HomeController::class, 'home']);
$app->router->get('/login', [HomeController::class, 'login']);
$app->router->post('/login', [UserController::class, 'login']);
$app->router->get('/register', [HomeController::class, 'register']);
$app->router->post('/register', [UserController::class, 'register']);
$app->router->get('/logout', [UserController::class, 'logout']);

$app->router->post('/create', [PostController::class, 'create']);

$app->run();


 
?>


```````

`/home/ramees/progs/php/sora/src/Helpers/Token.php`:

```````php
<?
namespace Sora\Helpers;

class Token{
    public static function generate_token(): string {
        return bin2hex(random_bytes(32));
    }
}
```````

`/home/ramees/progs/php/sora/src/Config/Database.php`:

```````php
<?php



namespace Sora\Config;
/** Database class to return a database object */
class Database {
      public static function get_connection(): \mysqli {

        $env = parse_ini_file(__DIR__."/.env");
        $username = $env['USERNAME'];
        $passwd = $env['PASSWORD'];
        $hostname = $env['HOSTNAME'];
        $database = $env['DATABASE'];


        /**
         * @var mysqli $mysqli object to be returned
         *
         */
        $mysqli = new \mysqli(
            $hostname,     // Database host (e.g., 'localhost')
            $username, // Database username
            $passwd, // Database password
            $database  // Database name
        );

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        return $mysqli;
    }
}

?>

```````

`/home/ramees/progs/php/sora/src/Config/sora.sql`:

```````sql
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2024 at 04:56 PM
-- Server version: 11.4.2-MariaDB
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sora`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `follower_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `idx_comments_post_id` (`post_id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`follower_id`,`followed_id`),
  ADD KEY `idx_follows_follower_id` (`follower_id`),
  ADD KEY `idx_follows_followed_id` (`followed_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`post_id`),
  ADD KEY `idx_likes_post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_posts_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `firstname` (`firstname`,`lastname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_ibfk_1` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `follows_ibfk_2` FOREIGN KEY (`followed_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```````

`/home/ramees/progs/php/sora/src/Config/init.php`:

```````php
<?php

define("ROOT", __DIR__."/../../");
define("APPROOT", __DIR__."/../../public/");

?>

```````

`/home/ramees/progs/php/sora/src/Core/Router.php`:

```````php
<?php 
namespace Sora\Core;

class Router {
  protected $routes = [];

/** route to get requests
 *
 * @param string $path              path to route for
 * @param array| string $callback   array with the classname and the method
 *                                  to call or a string containing the function name.
 */
  public function get($path, $callback){
    $this->routes['GET'][$path] = $callback;

  }


  /** route to get requests
   *
   * @param string $path            path to route for.
   * @param array|string $callback  array with the classname and the method
   *                               to call or a string containing the function name.
   *
   */

  public function post($path, $callback) {
    $this->routes['POST'][$path] = $callback;

  }

  /**
   * function to dispatch to the routes from the uri
   *
   *
   */

  public function dispatch(){
    $method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if(substr($uri, -1) === '/' && strlen($uri) > 1){
      $uri = substr($uri, 0, -1);
    }

    if(isset($this->routes[$method][$uri])){
      $callback = $this->routes[$method][$uri];

      if(is_callable($callback)){
        call_user_func($callback);

      }else if(is_array($callback)){
        $controller = new $callback[0]();
        $method = $callback[1];
        if (method_exists($controller, $method)) {
                call_user_func_array([$controller, $method], []);
            } else {
                http_response_code(500);
                echo "Error: Method '$method' not found in controller '$callback[0]'.";
            }
      }
    }
    else{
      http_response_code(404);
      echo "404 Not Found";
      echo $_SERVER['REQUEST_URI'];
    }


  }

}

```````

`/home/ramees/progs/php/sora/src/Core/Application.php`:

```````php
<?php

namespace Sora\Core;

class Application {
  public $router;


  public function __construct(Router $router){
    $this->router = $router;
  }

  public function run(){
    $this->router->dispatch();
  }
}
?>

```````

`/home/ramees/progs/php/sora/src/Controllers/HomeController.php`:

```````php
<?php 
namespace Sora\Controllers;

class HomeController{
  

  
  public function home(){
    if (isset($_SESSION['user_id']) ){
    require "../src/Views/home.html";
    }
    else{
      header("Location: /login");
      exit;
    }
  }

  public function login(){

    if($_SERVER['REQUEST_METHOD'] == "POST"){
      
    }
    else{
      require_once __DIR__."/../Views/login.html";
    }
  }

  public function register() {
    if($_SERVER['REQUEST_METHOD'] == "POST"){

    }
    else{
      require_once __DIR__."/../Views/signup.html";
    }
  }
}

```````

`/home/ramees/progs/php/sora/src/Controllers/PostController.php`:

```````php
<?php
namespace Sora\Controllers;

use \Sora\Models\PostModel;
use \Sora\Config\Database;


class PostController {
    private $postModel;
    
    public function __construct(){
        $db = Database::get_connection();
        $this->postModel = new PostModel($db);

    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $user_id = $_SESSION['user_id'];
            $content = $_POST['content'];
            if($this->postModel->create_post($user_id, $content)){
                header("Location: /");
                exit;
            } else{
                $error[] = "Error creating post";
            }
        }
        else{
            $errors[] = "invalid request method";
        }
    }
}
```````

`/home/ramees/progs/php/sora/src/Controllers/UserController.php`:

```````php
<?php

namespace Sora\Controllers;
use Sora\Config\Database;
use Sora\Models\UserModel;
// require_once __DIR__ . "/../../vendor/autoload.php";
// session_start();

/** Controller class for User Model
 *
 */
class UserController {

  /**@var Sora\Models\User $userModel user model object
   */
  private $userModel;
  
  /**Constructor for User Controller
   */

  public function __construct() {
  /** @var mysqli $db object returned from Sora\Config\Database::get_connection()
   */
  try{
  $db = Database::get_connection();
  }
  catch(Exception $e){
    echo "error getting a database connection";
    exit;
  }

  $this->userModel = new UserModel($db);

    
  }

  public function logout() {
    $_SESSION = array();
    session_destroy();
    header('Location: /login');
    exit;
  }

  public function is_logged_in(): bool{
    return isset($_SESSION['user_id']);
  }


  public function register(): array {
    $response =  $this->userModel->register($_POST);
    if($response['success'] === true) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['user_id'] = $response['user']['id'];
      header('Location: /');
      exit;
    }
    else{
      $_SESSION['error'] = $response['error'];
    
      header('Location: /register');
      exit;
    }
  }

  public function login() {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $response = $this->userModel->authenticate($username, $password);
    $_SESSION['username'] = $response['user']['username'];
    $_SESSION['user_id'] = $response['user']['id'];
    header('Location: /');
    }
    else{
      include __DIR__."/../Views/login.html";
    }
  
  }

  

}

```````

`/home/ramees/progs/php/sora/src/Models/UserModel.php`:

```````php
<?php                                         
namespace Sora\Models;
// require_once __DIR__."../../vendor/autoload.php"; 
/** User class for handling user-related operations                                       
 */

class UserModel {  

		/** @var mysqli $db Database connection object */                                                  
	  private $db;    

		/**                                                                                     
		* Constructor for User Class                                                                                                                                                 
		* @param mysqli $db The database connection object 
		*/                                                                                     
		public function __construct(\mysqli $db ) {                                                        
		$this->db = $db;                                                                        
		} 

		/**                                                                                     
		* Register a new user                                                                                                                                                     
		* @param string[] $data An associative array containing user registration data.           
		*                     Expected keys: 'firstName', 'LastName',        
		*                                     'username', 'email',           
		*                                     'password', 'confirmPassword'.                                                                                                                   
		* @return (bool|string[]) An associative array with keys:                                        
		*             'success' (bool) - Whether the registration was successful.              
		*             'error' (string[])  - Any error messages if registration failed.            
		*/                                                                                     
	
	public function register(array $data): array {              
      $validatedResult = $this->validate_user_registration($data);
      if (!$validatedResult['isValid']) {
				return [
					'success' => 'false',
					'error'   => $validatedResult['error'],
					'user' => null
				];
			}
			$username  = $data['username'];
			$email = $data['email'];
			$firstName = $data['first_name'];
			$lastName = $data['last_name'];
			$password = $data['password'];
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);


			$stmt = $this->db->prepare("SELECT id FROM users WHERE username = ? or email = ?");
			$stmt->bind_param("ss", $username, $email);
			$stmt->execute();
			$result = $stmt->get_result();
			if($result->num_rows > 0){
				return [
					'success' => false,
					'error' => ["USER ALREADY EXISTS"],
					'user' => null,
				];
			}

			$stmt = $this->db->prepare("insert into users(firstname, lastname, username, email, password) 
				                          values(?,?,?,?,?)");
			$stmt->bind_param("sssss", $firstName, $lastName, $username, $email, $hashed_password);
			if($stmt->execute()){
				$query = $this->db->prepare("select id from users where username = ?");
				$query->bind_param("s", $username);
				$query->execute();
				$result = $query->get_result();
				$user = $result->fetch_assoc();
				return [
					'success' => true,
					'error'   => null,
					'user' => $user,
				];
			}
			else {
				return [
					'success' => false,
					'error'   => ["cannot register user try again later."],
					'user' => null
				];
			}

		}                                                                                       

		/**                                                                                     
		* Authenticate a user                                                                  
		* @param string $username The username of the user                                     
		* @param string $password The 	password of the user                                    
		* @return string[] An array of user data if login is successful or null if it fails.
		* Expected keys: 'success' (bool),
		*                 'message' (string) - Login status message. 
		*                 'user'  (array) - user details.
		*/                                                                                     
	public function authenticate(string $username, string $password): ?array { 
       $stmt = $this->db->prepare("SELECT id, username, password FROM users where username = ? or email = ?" );
       $stmt->bind_param("ss", $username,$username);     
 			 $stmt->execute();
 			 $result = $stmt->get_result();

 			 if ($result->num_rows === 0) {
				 return [
					 'success' => false,
					 'message' => 'INVALID_DETAILS_ERROR',
				 ];
			 } 

			 $user = $result->fetch_assoc();

			 if(password_verify($password, $user['password'])) {

				 return [
					 'success' => true,
					 'message' => 'LOGIN_SUCCESSFUL',
					 'user' => $user,
				 ];
				 
			 }
			 else {
				 return [
					 'success' => false,
					 'message' => 'INVALID_PASSWORD_ERROR',
				 ];
			 }
		                                                               
		}


    


		/**                                                                                     
		* Find a user by email address                                                         
		* @param string $email email address to search for                                     
		* return string[]|null An array of user data if found, or null if not found.              
		*/                                                                                     
	public function find_user_by_email(string $email): array|null {                                               
	  $stmt = $this->db->prepare("select * from users where email=? limit 1"); 
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows() === 0) {
				return null;
			}
			else {
				$user = $result->fetch_assoc();
				return $user;
			}
		}                                                                                       
	
		/**                                                                                     
		* validate user registration data.                                                     
		* @param string[] $data An associative array containing user registration data.           
		*                    Expected keys: 'firstName', 'LastName',         
		*                                    'username', 'email' ,            
		*                                     'password', 'confirmPassword'.                             
		* @return (bool|string[])[] An associative array with keys:                                        
		*               'isValid' (bool) - Whether the data is valid.                          
		*                'error' (?array) - Any validation error messages.                      
		*/                                                                                     
	private function validate_user_registration(array $data): array {                                
			$username = $data['username'];
			$firstName = $data['first_name'];
			$lastName = $data['last_name'];
			$password = $data['password'];
			$retype_password = $data['retype_password'];

			
			return [
				'isValid' => true,
				'error' => null
			];

	} 

}                   

function test_input(string $data): string{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;

}
                                                                                      
                                                                                      
?>

```````

`/home/ramees/progs/php/sora/src/Models/PostModel.php`:

```````php
<?php
namespace Sora\Models;

class PostModel{
    private \mysqli $db;
    public function __construct(\mysqli $db){
        $this->db = $db;

    }

    public function create_post($user_id, $content): bool{

        
        $stmt =  $this->db->prepare("INSERT INTO posts (user_id, content) VALUES (?, ?)");

        $stmt->bind_param("is", $user_id, $content);
        return $stmt->execute();

    }

    public function view_posts(): array{
        $stmt = $this->db->prepare("Select * from posts");
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;

        }
        else {
            return [
                'error' => 'NO_RESULT'  
            ];
        }
    }

    
}
```````

`/home/ramees/progs/php/sora/src/Views/login.html`:

```````html
<!DOCTYPE html>
<html class="h-full sm:overflow-y-auto md:overflow-hidden" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup/Login | SORA</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="h-full bg-gray-100 text-sora-text"> 
    <header class="bg-gradient-to-r from-sora-primary to-sora-secondary text-white py-4 px-6 shadow-lg"> 
        <nav class="text-2xl sm:text-3xl md:text-4xl font-bold">SORA</nav>
    </header>
    <main class="h-full text-sora-text"> 

        <div
            class="flex flex-col sm:flex-row gap-7 sm:gap-15 md:gap-[7em] justify-center items-center p-4 sm:p-8 md:p-12 min-h-[calc(100vh-4rem)]">
            <div
                class="login-card  p-6 flex items-center justify-center rounded-md shadow-md w-full sm:w-[90%] md:w-[80%] lg:w-[40%] xl:w-[30%] max-w-md">
                <div class="login w-full text-lg sm:text-xl">
                    <form class="flex flex-col w-full justify-center gap-4" action="/login" method="POST">
                        <h3 class="w-full font-bold text-2xl text-gray-900 mb-4 text-center">Login</h3>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="username">Username</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="password" name="password" id="password" required>
                        </div>
                        <button
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" name="submit">Login</button>
                    </form>
                </div>
            </div>

            <div class="signup-card  p-6 flex items-center justify-center rounded-md w-full sm:w-[90%] md:w-[80%] lg:w-[40%] xl:w-[30%] max-w-md  shadow-md">
                <div class="signup w-full text-lg sm:text-xl">
                    <form class="flex flex-col w-full justify-center gap-4" action="/register" method="POST">
                        <h3 class="w-full font-bold text-2xl text-gray-900 mb-4 text-center">Signup</h3>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-email">Email</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="email" name="email" id="signup-email" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-first-name">First Name</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="first_name" id="signup-first-name" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-last-name">Last Name</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="last_name" id="signup-last-name" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-username">Username</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="username" id="signup-username" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-password">Password</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="password" name="password" id="signup-password" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-retype-password">Retype
                                Password</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="password" name="retype_password" id="signup-retype-password" required>
                        </div>
                        <button
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" name="submit">Signup</button>
                        <div class="error text-red-600 w-full text-center text-lg font-bold mt-2 hidden">
                            <?php 
                            if(isset($_SESSION['error'])){
                            echo implode("<br>", $_SESSION['error']); 
                            $_SESSION['error'] = null;
                            unset($_SESSION['error']);
                            }
                             ?>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </main>

    <script>
        let login_card = document.querySelector(".login-card");
        let signup_card = document.querySelector(".signup-card");

        let styles_array = ["bg-gray-200", "shadow-md"];

        login_card.addEventListener("mouseenter", () => {
            login_card.classList.add(...styles_array);
            signup_card.classList.remove(...styles_array);
        });

        signup_card.addEventListener("mouseenter", () => {
            signup_card.classList.add(...styles_array);
            login_card.classList.remove(...styles_array);
        });

        let error = document.querySelector(".error");
        if (error.textContent.trim() !== "") {
            error.classList.remove("hidden");
            document.querySelector("html").classList.add("md:overflow-y-auto");
        }
    </script>
</body>

</html>
```````

`/home/ramees/progs/php/sora/src/Views/signup.html`:

```````html
<!DOCTYPE html>
<html class="h-full sm:overflow-y-auto md:overflow-hidden" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup/Login | SORA</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="h-full bg-gray-100 text-sora-text"> 
    <header class="bg-gradient-to-r from-sora-primary to-sora-secondary text-white py-4 px-6 shadow-lg"> 
        <nav class="text-2xl sm:text-3xl md:text-4xl font-bold">SORA</nav>
    </header>
    <main class="h-full text-sora-text"> 

        <div
            class="flex flex-col sm:flex-row gap-7 sm:gap-15 md:gap-[7em] justify-center items-center p-4 sm:p-8 md:p-12 min-h-[calc(100vh-4rem)]">

            <div class="signup-card  p-6 flex items-center justify-center rounded-md w-full sm:w-[90%] md:w-[80%] lg:w-[40%] xl:w-[30%] max-w-md  shadow-md">
                <div class="signup w-full text-lg sm:text-xl">
                    <form class="flex flex-col w-full justify-center gap-4" action="/register" method="POST">
                        <h3 class="w-full font-bold text-2xl text-gray-900 mb-4 text-center">Signup</h3>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-email">Email</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="email" name="email" id="signup-email" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-first-name">First Name</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="first_name" id="signup-first-name" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-last-name">Last Name</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="last_name" id="signup-last-name" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-username">Username</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="username" id="signup-username" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-password">Password</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="password" name="password" id="signup-password" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="signup-retype-password">Retype
                                Password</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="password" name="retype_password" id="signup-retype-password" required>
                        </div>
                        <button
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" name="submit">Signup</button>
                        <div class="error text-red-600 w-full text-center text-lg font-bold mt-2 hidden">
                            <?php 
                            if(isset($_SESSION['error'])){
                            echo implode("<br>", $_SESSION['error']); 
                            $_SESSION['error'] = null;
                            unset($_SESSION['error']);
                            }
                             ?>
                        </div>
                    </form>
                </div>
            </div>
            <div
                class="login-card  p-6 flex items-center justify-center rounded-md shadow-md w-full sm:w-[90%] md:w-[80%] lg:w-[40%] xl:w-[30%] max-w-md">
                <div class="login w-full text-lg sm:text-xl">
                    <form class="flex flex-col w-full justify-center gap-4" action="/login" method="POST">
                        <h3 class="w-full font-bold text-2xl text-gray-900 mb-4 text-center">Login</h3>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="username">Username</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="password" name="password" id="password" required>
                        </div>
                        <button
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" name="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        let login_card = document.querySelector(".login-card");
        let signup_card = document.querySelector(".signup-card");

        let styles_array = ["bg-gray-200", "shadow-md"];

        login_card.addEventListener("mouseenter", () => {
            login_card.classList.add(...styles_array);
            signup_card.classList.remove(...styles_array);
        });

        signup_card.addEventListener("mouseenter", () => {
            signup_card.classList.add(...styles_array);
            login_card.classList.remove(...styles_array);
        });

        let error = document.querySelector(".error");
        if (error.textContent.trim() !== "") {
            error.classList.remove("hidden");
            document.querySelector("html").classList.add("md:overflow-y-auto");
        }
    </script>
</body>

</html>
```````

`/home/ramees/progs/php/sora/src/Views/home.html`:

```````html
<!DOCTYPE html>
<html class="h-full" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | SORA</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="h-full bg-gray-100 text-gray-900 flex flex-col">
    <header class="bg-gradient-to-r from-sora-primary to-sora-secondary text-white py-4 px-6 shadow-lg">
        <nav class="container md:mx-0 mx-auto flex justify-between items-center">
            <span class="text-2xl sm:text-3xl md:text-4xl font-bold">SORA</span>
            <button class="md:hidden text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>
    
    <main class="flex-grow flex overflow-hidden">
        <aside class="w-64 bg-white shadow-lg overflow-y-auto hidden md:block">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-6 text-sora-primary">Peeps</h2>
                <div class="space-y-4">
                    <div class="bg-sora-bg rounded-lg p-4 transition duration-300 hover:shadow-md">
                        <h3 class="text-lg font-semibold mb-3 text-sora-secondary">Online</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center space-x-3">
                                <div class="relative">
                                    <img src="/api/placeholder/40/40" alt="Alice" class="w-10 h-10 rounded-full">
                                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 border-2 border-white rounded-full"></span>
                                </div>
                                <span class="font-medium">Alice Johnson</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="relative">
                                    <img src="/api/placeholder/40/40" alt="Bob" class="w-10 h-10 rounded-full">
                                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 border-2 border-white rounded-full"></span>
                                </div>
                                <span class="font-medium">Bob Smith</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-sora-bg rounded-lg p-4 transition duration-300 hover:shadow-md">
                        <h3 class="text-lg font-semibold mb-3 text-sora-secondary">Offline</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center space-x-3">
                                <div class="relative">
                                    <img src="/api/placeholder/40/40" alt="Charlie" class="w-10 h-10 rounded-full">
                                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-400 border-2 border-white rounded-full"></span>
                                </div>
                                <span class="font-medium text-gray-500">Charlie Brown</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside> 

        <div class="flex-grow flex flex-col overflow-hidden">
            <section class="flex-grow p-4 overflow-y-auto">
                <h1 class="text-2xl font-bold mb-4 text-sora-primary">Tweets</h1>
                <div class="space-y-4">
                    <!-- Tweet cards (repeated for each tweet) -->
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-2">
                            <img src="/api/placeholder/40/40" alt="User 1" class="w-10 h-10 rounded-full mr-3">
                            <p class="font-bold text-sora-secondary">@user1</p>
                        </div>
                        <p class="mb-3">This is a sample tweet with some interesting content.</p>
                        <div class="flex items-center space-x-4 text-gray-500">
                            <button class="flex items-center space-x-1 hover:text-blue-500 transition duration-300">
                                <i class="fas fa-arrow-up"></i>
                                <span>10</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-red-500 transition duration-300">
                                <i class="fas fa-arrow-down"></i>
                                <span>2</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-green-500 transition duration-300">
                                <i class="fas fa-comment"></i>
                                <span>5 comments</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-2">
                            <img src="/api/placeholder/40/40" alt="User 1" class="w-10 h-10 rounded-full mr-3">
                            <p class="font-bold text-sora-secondary">@user1</p>
                        </div>
                        <p class="mb-3">This is a sample tweet with some interesting content.</p>
                        <div class="flex items-center space-x-4 text-gray-500">
                            <button class="flex items-center space-x-1 hover:text-blue-500 transition duration-300">
                                <i class="fas fa-arrow-up"></i>
                                <span>10</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-red-500 transition duration-300">
                                <i class="fas fa-arrow-down"></i>
                                <span>2</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-green-500 transition duration-300">
                                <i class="fas fa-comment"></i>
                                <span>5 comments</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-2">
                            <img src="/api/placeholder/40/40" alt="User 1" class="w-10 h-10 rounded-full mr-3">
                            <p class="font-bold text-sora-secondary">@user1</p>
                        </div>
                        <p class="mb-3">This is a sample tweet with some interesting content.</p>
                        <div class="flex items-center space-x-4 text-gray-500">
                            <button class="flex items-center space-x-1 hover:text-blue-500 transition duration-300">
                                <i class="fas fa-arrow-up"></i>
                                <span>10</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-red-500 transition duration-300">
                                <i class="fas fa-arrow-down"></i>
                                <span>2</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-green-500 transition duration-300">
                                <i class="fas fa-comment"></i>
                                <span>5 comments</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-2">
                            <img src="/api/placeholder/40/40" alt="User 1" class="w-10 h-10 rounded-full mr-3">
                            <p class="font-bold text-sora-secondary">@user1</p>
                        </div>
                        <p class="mb-3">This is a sample tweet with some interesting content.</p>
                        <div class="flex items-center space-x-4 text-gray-500">
                            <button class="flex items-center space-x-1 hover:text-blue-500 transition duration-300">
                                <i class="fas fa-arrow-up"></i>
                                <span>10</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-red-500 transition duration-300">
                                <i class="fas fa-arrow-down"></i>
                                <span>2</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-green-500 transition duration-300">
                                <i class="fas fa-comment"></i>
                                <span>5 comments</span>
                            </button>
                        </div>
                    </div>


                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-2">
                            <img src="/api/placeholder/40/40" alt="User 1" class="w-10 h-10 rounded-full mr-3">
                            <p class="font-bold text-sora-secondary">@user1</p>
                        </div>
                        <p class="mb-3">This is a sample tweet with some interesting content.</p>
                        <div class="flex items-center space-x-4 text-gray-500">
                            <button class="flex items-center space-x-1 hover:text-blue-500 transition duration-300">
                                <i class="fas fa-arrow-up"></i>
                                <span>10</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-red-500 transition duration-300">
                                <i class="fas fa-arrow-down"></i>
                                <span>2</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-green-500 transition duration-300">
                                <i class="fas fa-comment"></i>
                                <span>5 comments</span>
                            </button>
                        </div>
                    </div>


                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-2">
                            <img src="/api/placeholder/40/40" alt="User 1" class="w-10 h-10 rounded-full mr-3">
                            <p class="font-bold text-sora-secondary">@user1</p>
                        </div>
                        <p class="mb-3">This is a sample tweet with some interesting content.</p>
                        <div class="flex items-center space-x-4 text-gray-500">
                            <button class="flex items-center space-x-1 hover:text-blue-500 transition duration-300">
                                <i class="fas fa-arrow-up"></i>
                                <span>10</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-red-500 transition duration-300">
                                <i class="fas fa-arrow-down"></i>
                                <span>2</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-green-500 transition duration-300">
                                <i class="fas fa-comment"></i>
                                <span>5 comments</span>
                            </button>
                        </div>
                    </div>
                    <!-- Repeat the above div for each tweet -->
                </div>
            </section>
            <footer class="bg-gradient-to-r from-sora-primary to-sora-secondary p-4 shadow-lg m-2  rounded-lg">
                <div class="max-w-4xl mx-auto">
                    <form action="/create" method="post" class="flex flex-col sm:flex-row sm:items-end items-center  gap-3">
                        <div class="relative flex-grow">
                            <textarea name="content" id="tweet" rows="3" class="w-full p-3 pr-12 rounded-lg resize-none bg-white bg-opacity-90 focus:ring-2 focus:ring-sora-bg focus:outline-none placeholder-gray-500 " placeholder="What's on your mind?"></textarea>
                            <div class="absolute bottom-3 right-3 flex space-x-2">
                                <!-- <button type="button" class="text-sora-primary hover:text-sora-secondary transition-colors duration-300" title="Add image">
                                    <i class="fas fa-image"></i>
                                </button>
                                <button type="button" class="text-sora-primary hover:text-sora-secondary transition-colors duration-300" title="Add emoji">
                                    <i class="fas fa-smile"></i>
                                </button> -->
                            </div>
                        </div>
                        <button name="post-btn" class="bg-sora-bg text-sora-primary py-2 px-6 rounded-full hover:bg-white hover:text-sora-secondary transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-sora-bg">
                            <i class="fas fa-paper-plane mr-2"></i>Post
                        </button>
                    </form>
                   
                </div>
            </footer>
        </div>
    </main>
</body>
</html>
```````

`/home/ramees/progs/php/sora/README.md`:

```````md
# സൊറ 
Micro blogging Social media platform for cs department U.C College

```````