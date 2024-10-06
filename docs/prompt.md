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
│   │   ├── sample.php
│   │   └── UserController.php
│   ├── Models
│   │   └── UserModel.php
│   ├── Views
│   │   ├── login.html
│   │   ├── login.php
│   │   ├── signup.html
│   │   └── home.html
│   └── helpers
│       └── sample.php
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
    extend: {},
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

.top-10 {
  top: 2.5rem;
}

.mt-3 {
  margin-top: 0.75rem;
}

.mb-4 {
  margin-bottom: 1rem;
}

.mt-2 {
  margin-top: 0.5rem;
}

.mt-4 {
  margin-top: 1rem;
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

.h-\[100\%\] {
  height: 100%;
}

.h-\[50\%\] {
  height: 50%;
}

.h-\[70\%\] {
  height: 70%;
}

.h-full {
  height: 100%;
}

.h-fit {
  height: -moz-fit-content;
  height: fit-content;
}

.h-3\/4 {
  height: 75%;
}

.min-h-\[calc\(100vh-4rem\)\] {
  min-height: calc(100vh - 4rem);
}

.w-\[20\%\] {
  width: 20%;
}

.w-\[40\%\] {
  width: 40%;
}

.w-\[80\%\] {
  width: 80%;
}

.w-full {
  width: 100%;
}

.w-\[30\%\] {
  width: 30%;
}

.w-\[25\%\] {
  width: 25%;
}

.w-2\/5 {
  width: 40%;
}

.max-w-md {
  max-width: 28rem;
}

.flex-1 {
  flex: 1 1 0%;
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.resize {
  resize: both;
}

.flex-col {
  flex-direction: column;
}

.items-start {
  align-items: flex-start;
}

.items-end {
  align-items: flex-end;
}

.items-center {
  align-items: center;
}

.items-stretch {
  align-items: stretch;
}

.justify-end {
  justify-content: flex-end;
}

.justify-center {
  justify-content: center;
}

.gap-1 {
  gap: 0.25rem;
}

.gap-2 {
  gap: 0.5rem;
}

.gap-6 {
  gap: 1.5rem;
}

.gap-\[5em\] {
  gap: 5em;
}

.gap-\[7em\] {
  gap: 7em;
}

.gap-\[6em\] {
  gap: 6em;
}

.gap-\[4em\] {
  gap: 4em;
}

.gap-3 {
  gap: 0.75rem;
}

.gap-8 {
  gap: 2rem;
}

.gap-9 {
  gap: 2.25rem;
}

.gap-7 {
  gap: 1.75rem;
}

.overflow-hidden {
  overflow: hidden;
}

.overflow-scroll {
  overflow: scroll;
}

.rounded-md {
  border-radius: 0.375rem;
}

.border {
  border-width: 1px;
}

.bg-black {
  --tw-bg-opacity: 1;
  background-color: rgb(0 0 0 / var(--tw-bg-opacity));
}

.bg-sky-700 {
  --tw-bg-opacity: 1;
  background-color: rgb(3 105 161 / var(--tw-bg-opacity));
}

.bg-slate-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(148 163 184 / var(--tw-bg-opacity));
}

.bg-slate-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(71 85 105 / var(--tw-bg-opacity));
}

.bg-slate-900 {
  --tw-bg-opacity: 1;
  background-color: rgb(15 23 42 / var(--tw-bg-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-gray-300 {
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}

.bg-yellow-900 {
  --tw-bg-opacity: 1;
  background-color: rgb(113 63 18 / var(--tw-bg-opacity));
}

.bg-yellow-300 {
  --tw-bg-opacity: 1;
  background-color: rgb(253 224 71 / var(--tw-bg-opacity));
}

.bg-yellow-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(234 179 8 / var(--tw-bg-opacity));
}

.bg-yellow-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(250 204 21 / var(--tw-bg-opacity));
}

.bg-amber-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(251 191 36 / var(--tw-bg-opacity));
}

.bg-amber-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(253 230 138 / var(--tw-bg-opacity));
}

.bg-amber-700 {
  --tw-bg-opacity: 1;
  background-color: rgb(180 83 9 / var(--tw-bg-opacity));
}

.bg-slate-700 {
  --tw-bg-opacity: 1;
  background-color: rgb(51 65 85 / var(--tw-bg-opacity));
}

.bg-zinc-900 {
  --tw-bg-opacity: 1;
  background-color: rgb(24 24 27 / var(--tw-bg-opacity));
}

.bg-zinc-800 {
  --tw-bg-opacity: 1;
  background-color: rgb(39 39 42 / var(--tw-bg-opacity));
}

.bg-gray-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.bg-slate-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(100 116 139 / var(--tw-bg-opacity));
}

.bg-slate-300 {
  --tw-bg-opacity: 1;
  background-color: rgb(203 213 225 / var(--tw-bg-opacity));
}

.bg-gray-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(156 163 175 / var(--tw-bg-opacity));
}

.bg-zinc-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(161 161 170 / var(--tw-bg-opacity));
}

.bg-zinc-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(113 113 122 / var(--tw-bg-opacity));
}

.p-1 {
  padding: 0.25rem;
}

.p-2 {
  padding: 0.5rem;
}

.p-\[2em\] {
  padding: 2em;
}

.p-6 {
  padding: 1.5rem;
}

.p-4 {
  padding: 1rem;
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.px-8 {
  padding-left: 2rem;
  padding-right: 2rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.pt-\[20px\] {
  padding-top: 20px;
}

.pt-\[12em\] {
  padding-top: 12em;
}

.pt-12 {
  padding-top: 3rem;
}

.pb-4 {
  padding-bottom: 1rem;
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

.text-4xl {
  font-size: 2.25rem;
  line-height: 2.5rem;
}

.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.font-semibold {
  font-weight: 600;
}

.font-bold {
  font-weight: 700;
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

.text-slate-100 {
  --tw-text-opacity: 1;
  color: rgb(241 245 249 / var(--tw-text-opacity));
}

.text-slate-900 {
  --tw-text-opacity: 1;
  color: rgb(15 23 42 / var(--tw-text-opacity));
}

.text-zinc-900 {
  --tw-text-opacity: 1;
  color: rgb(24 24 27 / var(--tw-text-opacity));
}

.text-gray-200 {
  --tw-text-opacity: 1;
  color: rgb(229 231 235 / var(--tw-text-opacity));
}

.text-gray-400 {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.text-gray-100 {
  --tw-text-opacity: 1;
  color: rgb(243 244 246 / var(--tw-text-opacity));
}

.text-gray-300 {
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}

.underline {
  text-decoration-line: underline;
}

.shadow-sm {
  --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
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

*{
  margin: 0;
  padding:0;
  box-sizing: border-box;
}

.hover\:bg-slate-500:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(100 116 139 / var(--tw-bg-opacity));
}

.hover\:bg-slate-400:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(148 163 184 / var(--tw-bg-opacity));
}

@media (min-width: 640px) {
  .sm\:flex {
    display: flex;
  }

  .sm\:w-\[40\%\] {
    width: 40%;
  }

  .sm\:w-\[90\%\] {
    width: 90%;
  }

  .sm\:flex-row {
    flex-direction: row;
  }

  .sm\:flex-col {
    flex-direction: column;
  }

  .sm\:gap-8 {
    gap: 2rem;
  }

  .sm\:gap-12 {
    gap: 3rem;
  }

  .sm\:overflow-auto {
    overflow: auto;
  }

  .sm\:overflow-hidden {
    overflow: hidden;
  }

  .sm\:overflow-scroll {
    overflow: scroll;
  }

  .sm\:p-6 {
    padding: 1.5rem;
  }

  .sm\:p-8 {
    padding: 2rem;
  }

  .sm\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .sm\:py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .sm\:pb-4 {
    padding-bottom: 1rem;
  }

  .sm\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
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
  .md\:w-\[20\%\] {
    width: 20%;
  }

  .md\:w-1\/3 {
    width: 33.333333%;
  }

  .md\:w-\[80\%\] {
    width: 80%;
  }

  .md\:flex-row {
    flex-direction: row;
  }

  .md\:flex-col {
    flex-direction: column;
  }

  .md\:gap-12 {
    gap: 3rem;
  }

  .md\:gap-9 {
    gap: 2.25rem;
  }

  .md\:gap-\[4em\] {
    gap: 4em;
  }

  .md\:gap-\[6em\] {
    gap: 6em;
  }

  .md\:gap-\[9em\] {
    gap: 9em;
  }

  .md\:gap-\[7em\] {
    gap: 7em;
  }

  .md\:overflow-auto {
    overflow: auto;
  }

  .md\:overflow-hidden {
    overflow: hidden;
  }

  .md\:overflow-scroll {
    overflow: scroll;
  }

  .md\:p-12 {
    padding: 3rem;
  }

  .md\:px-16 {
    padding-left: 4rem;
    padding-right: 4rem;
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


use Sora\Core\Application;
use Sora\Core\Router;
use Sora\Controllers\UserController;
use Sora\Controllers\HomeController;

$router = new Router();
$app = new Application($router);

$app->router->get('/', [HomeController::class, 'home']);
$app->router->get('/login', [HomeController::class, 'login']);
$app->router->post('/login', [UserController::class, 'login']);
$app->router->get('/register', [HomeController::class, 'register']);
$app->router->post('/register', [UserController::class, 'register']);
$app->router->get('/logout', [UserController::class, 'logout']);

$app->run();


 
?>


```````

`/home/ramees/progs/php/sora/src/Config/Database.php`:

```````php
<?php



namespace Sora\Config;
/** Database class to return a database object */
class Database {
      public static function getConnection(): \mysqli {

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
    if (isset($_SESSION['user_id']) || 1){
    require "../src/Views/home.html";
    }
    else{
      header("Location: /login");
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

`/home/ramees/progs/php/sora/src/Controllers/UserController.php`:

```````php
<?php

namespace Sora\Controllers;
use Sora\Config\Database;
use Sora\Models\UserModel;
// require_once __DIR__ . "/../../vendor/autoload.php";
session_start();

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
  $db = Database::getConnection();
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
  }

  public function isLoggedin(): bool{
    return isset($_SESSION['user_id']);
  }


  public function register(): array {
    $response =  $this->userModel->register($_POST);
    if($response['success'] === true) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['user_id'] = $response['user']['id'];
      header('Location: index.php');
    }
    else{
      $errors = $response['error'];
      include 'views/register.php';
    }
  }

  public function login() {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $response = $this->userModel->authenticate($username, $password);
    $_SESSION['username'] = $_POST['username'];
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
      $validatedResult = $this->validateUserRegistration($data);
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
       $stmt = $this->db->prepare("SELECT id, username, password FROM users where username = ?");
       $stmt->bind_param("s", $username);     
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
	public function findUserByEmail(string $email): array|null {                                               
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
	private function validateUserRegistration(array $data): array {                                
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

`/home/ramees/progs/php/sora/src/Views/login.html`:

```````html
<!DOCTYPE html>
<html class="h-full sm:overflow-scroll md:overflow-hidden " lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup | SORA</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="h-full bg-gray-300 text-gray-300">
    <header>
        <nav class="text-2xl sm:text-3xl md:text-4xl bg-zinc-900 py-3 px-4 sm:py-4 sm:px-6">SORA</nav>
    </header>
    <main class="h-full">
        <div class="flex flex-col sm:flex-row gap-7 sm:gap-15 md:gap-[7em] justify-center items-center p-4 sm:p-8 md:p-12 min-h-[calc(100vh-4rem)]">
            <div class="login-card bg-slate-400 p-4 sm:p-6 flex items-center justify-center rounded-md shadow-md w-full sm:w-[90%] md:w-[80%] lg:w-[40%] xl:w-[30%] max-w-md">
                <div class="login w-full text-lg sm:text-xl">
                    <form class="flex flex-col w-full justify-center gap-2" action="/login" method="POST">
                        <h3 class="w-full font-bold underline text-slate-900 mb-4 text-xl sm:text-2xl">Login</h3>
                        <label class="text-slate-900 font-semibold" for="username">Username</label>
                        <input class="rounded-md shadow-sm p-2" type="text" name="username" id="username">
                        <label class="text-slate-900 font-semibold mt-2" for="password">Password</label>
                        <input class="rounded-md shadow-sm p-2" type="password" name="password" id="password">
                        <button class="p-2 bg-slate-900 text-lg sm:text-xl rounded-md mt-4 w-full sm:w-[40%]" type="submit" name="submit">Login</button>
                    </form>
                </div>
            </div>
            <div class="signup-card p-4 sm:p-6 flex items-center justify-center rounded-md w-full sm:w-[90%] md:w-[80%] lg:w-[40%] xl:w-[30%] max-w-md">
                <div class="signup w-full text-lg sm:text-xl">
                    <form class="flex flex-col w-full justify-center gap-2" action="/register" method="POST">
                        <h3 class="w-full font-bold underline text-slate-900 mb-4 text-xl sm:text-2xl">Signup</h3>
                        <label class="text-slate-900 font-semibold" for="signup-email">Email</label>
                        <input class="rounded-md shadow-sm p-2" type="email" name="email" id="signup-email">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-first-name">First Name</label>
                        <input class="rounded-md shadow-sm p-2" type="text" name="first_name" id="signup-first-name">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-last-name">Last Name</label>
                        <input class="rounded-md shadow-sm p-2" type="text" name="last_name" id="signup-last-name">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-username">Username</label>
                        <input class="rounded-md shadow-sm p-2" type="text" name="username" id="signup-username">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-password">Password</label>
                        <input class="rounded-md shadow-sm p-2" type="password" name="password" id="signup-password">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-retype-password">Retype Password</label>
                        <input class="rounded-md shadow-sm p-2" type="password" name="retype_password" id="signup-retype-password">
                        <button class="p-2 bg-slate-900 text-lg sm:text-xl rounded-md mt-4 w-full sm:w-[40%]" type="submit" name="submit">Signup</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        let login_card = document.querySelector(".login-card");
        let signup_card = document.querySelector(".signup-card");

        let styles_array = ["bg-slate-400", "shadow-md"];

        login_card.addEventListener("mouseenter", () => {
            login_card.classList.add(...styles_array);
            signup_card.classList.remove(...styles_array);
        });

        signup_card.addEventListener("mouseenter", () => {
            signup_card.classList.add(...styles_array);
            login_card.classList.remove(...styles_array);
        });
    </script>
</body>

</html>
```````

`/home/ramees/progs/php/sora/src/Views/login.php`:

```````php
<?php

?>



```````

`/home/ramees/progs/php/sora/src/Views/signup.html`:

```````html
<!DOCTYPE html>
<html class="h-full sm:overflow-scroll md:overflow-hidden " lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup/Login | SORA</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="h-full bg-gray-300 text-gray-300">
    <header>
        <nav class="text-2xl sm:text-3xl md:text-4xl bg-zinc-900 py-3 px-4 sm:py-4 sm:px-6">SORA</nav>
    </header>
    <main class="h-full">
        <div class="flex flex-col sm:flex-row gap-7 sm:gap-15 md:gap-[7em] justify-center items-center p-4 sm:p-8 md:p-12 min-h-[calc(100vh-4rem)]">
            
            <div class="signup-card p-4 sm:p-6 flex items-center justify-center rounded-md w-full sm:w-[90%] md:w-[80%] lg:w-[40%] xl:w-[30%] max-w-md">
                <div class="signup w-full text-lg sm:text-xl">
                    <form class="flex flex-col w-full justify-center gap-2" action="/register" method="POST">
                        <h3 class="w-full font-bold underline text-slate-900 mb-4 text-xl sm:text-2xl">Signup</h3>
                        <label class="text-slate-900 font-semibold" for="signup-email">Email</label>
                        <input class="rounded-md shadow-sm p-2" type="email" name="email" id="signup-email">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-first-name">First Name</label>
                        <input class="rounded-md shadow-sm p-2" type="text" name="first_name" id="signup-first-name">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-last-name">Last Name</label>
                        <input class="rounded-md shadow-sm p-2" type="text" name="last_name" id="signup-last-name">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-username">Username</label>
                        <input class="rounded-md shadow-sm p-2" type="text" name="username" id="signup-username">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-password">Password</label>
                        <input class="rounded-md shadow-sm p-2" type="password" name="password" id="signup-password">
                        <label class="text-slate-900 font-semibold mt-2" for="signup-retype-password">Retype Password</label>
                        <input class="rounded-md shadow-sm p-2" type="password" name="retype_password" id="signup-retype-password">
                        <button class="p-2 bg-slate-900 text-lg sm:text-xl rounded-md mt-4 w-full sm:w-[40%]" type="submit" name="submit">Signup</button>
                    </form>
                </div>
            </div>
            <div class="login-card bg-slate-400 p-4 sm:p-6 flex items-center justify-center rounded-md shadow-md w-full sm:w-[90%] md:w-[80%] lg:w-[40%] xl:w-[30%] max-w-md">
                <div class="login w-full text-lg sm:text-xl">
                    <form class="flex flex-col w-full justify-center gap-2" action="/login" method="POST">
                        <h3 class="w-full font-bold underline text-slate-900 mb-4 text-xl sm:text-2xl">Login</h3>
                        <label class="text-slate-900 font-semibold" for="username">Username</label>
                        <input class="rounded-md shadow-sm p-2" type="text" name="username" id="username">
                        <label class="text-slate-900 font-semibold mt-2" for="password">Password</label>
                        <input class="rounded-md shadow-sm p-2" type="password" name="password" id="password">
                        <button class="p-2 bg-slate-900 text-lg sm:text-xl rounded-md mt-4 w-full sm:w-[40%]" type="submit" name="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        let login_card = document.querySelector(".login-card");
        let signup_card = document.querySelector(".signup-card");

        let styles_array = ["bg-slate-400", "shadow-md"];

        login_card.addEventListener("mouseenter", () => {
            login_card.classList.add(...styles_array);
            signup_card.classList.remove(...styles_array);
        });

        signup_card.addEventListener("mouseenter", () => {
            signup_card.classList.add(...styles_array);
            login_card.classList.remove(...styles_array);
        });
    </script>
</body>

</html>
```````

`/home/ramees/progs/php/sora/src/Views/home.html`:

```````html



<html>
<head>
<title>SORA</title>
<link rel='stylesheet' href='css/styles.css'>
</head>
<body>
<header>
<nav class='text-4xl bg-sky-700 '>
SORA 
</nav>
</header>

<section class='content'>

</section>

</body>
</html>


```````

`/home/ramees/progs/php/sora/README.md`:

```````md
# സൊറ 
Micro blogging Social media platform for cs department U.C College

```````