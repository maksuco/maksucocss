# Bootwind CSS/JS Helpers
Remember to add/replace your **variables** before importing, 
and then **@import 'compiled';**

---
# CSS

## Grid
Use **[Bootstrap 4](https://getbootstrap.com/docs/4.3/layout/grid/)** docs for the grid and is divided in 24 columns

### Containers
You can use `.container-fluid` and `.container` (centered) and  `.container-max` witch is like fluid but with a limit of 1800px


### Rows
`.row` is not mandatory, but you can use them to divide/group columns in rows


### Columns
Same as Bootstrap 4
`.col-auto`
To get them all in a row `.col` `.col-sm` `.col-md` `.col-lg` `.col-xl`

Or to specify the size of each one
`.col-*` `.col-sm-*` `.col-md-*` `.col-lg-*` `.col-xl-*`



---
### Flex


**Center Items Horizontal:** `.justify-start` `.justify-end` `.justify-center` `.justify-between` `.justify-around`

**Center Items Vertical:** `.content-start` `.content-end` `.content-center` `.content-between` `.content-around` 

**Center Self Horizontal:** `.items-start` `.items-end` `.items-center` `.items-baseline` `.items-stretch`

**Center Self Vertical:** `.self-start` `.self-end` `.self-center` `.self-baseline` `.self-stretch` 


**Others:**


---
### Display

`.hidden` `.block` `.inline` `.inline-block` `.table` `.table-row` `.table-cell`

Create a new line to break to div's for example `.breakline`

Also you can target mobile `.sm-*` or desktop `.md-*` only



---
### Widths and Heights
Positions uses **px** as measures

You can use `.w-*` `.h-*` `.min-w-*` `.max-h-*`

You can use`.w-auto` `.w-full` `.w-half` `.w-third` `.w-fourth` `.w-screen`

Eliminate w `.w-unset`, set w same as content `.w-fit`

And also .w-* with gives options in px

**Available in px:**
`0, 5, 6, 7, 8, 9, 10, 15, 20, 25, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 150, 200, 225, 250, 275, 300, 325, 350, 375, 400, 450, 500, 600, 700, 800, 900, 1000`

The same works for `.h`



---
### Position
Positions uses **px** as measures
You can use `.absolute` `.relative` `.fixed`

For absolute you can also `.absolute-t` `.absolute-tl` `.absolute-tr` `.absolute-tc` witch centers on horizontal

`.absolute-b` `.absolute-bl` `.absolute-br` `.absolute-bc` witch centers on horizontal

You can also use `.absolute-c` witch centers on horizontal and vertical, also for just horizontal `.absolute-hc` and just vertical  `.absolute-vc`

You can add more `.top-*` `.bottom-*` `.left-*` `.right-*`
Also `.top-auto`  `.top-center` `.bottom-auto`  `.bottom-center` `.left-auto`  `.left-center` `.right-auto`  `.right-center``

For z-index you can use `.z-*` 10, 20, 30...90, 100 and 1000


---
### Margins and Paddings
Margins uses **rem** as measures

You can use `.m-` `.mt-` `.mb-` `.ml-` `.mr-`... and negative margins `.m--`

Also you can target mobile `.sm-m-*` or desktop `.md-m-*` only

You can use `.p-` `.pt-` `.pb-` `.pl-` `.pr-`

Also you can target mobile `.sm-p-*` or desktop `.md-p-*` only

**Sizes:** 0.25rem, 0.5rem, 0.75rem, 1rem, 1.25rem, 1.5rem, 1.75rem, 2rem, 2.25rem, 2.5rem, 2.75rem, 3rem, 4rem, 5rem, 6rem, 7rem, 8rem, 9rem, 10rem, 11rem;



---
### Text
Margins uses **rem** as measures

**Sizes:** `.text-xs` `.text-sm` `.text-normal` `.text-lg` `.text-xl` `.text-2x` `.text-3x` `.text-4x` `.text-5x` `.text-6x` also `.small`


**Weight:** `.text-normal` `.text-light` `.text-bold` `.text-bolder`


**Align:** `.text-left` `.text-center` `.text-right` `.text-justify`


**Transform:** `.normal` `.italic` `.uppercase` `.lowercase` `.capitalize` `.underline` `.line-through`

With all classes you can also use it with  `.md-*` to target desktop





---
### Buttons

Use `.btn`

**Aditional Sizes:** `.btn-xs`, `.btn-sm` `.btn-lg` `.btn-xl`.

**Available Colors:** primary, secondary, black, white, gray, blue, indigo, purple, red, green, teal, yellow, orange, white and white.

**.btn:** Use `.btn` combine with `.btn-*` with variants

You can use `.btn-dark` or `.btn-light` OR JUST `.btn`,  and then apply `.bg-*` and `.text-*` or even `.bg-gradient-*`




---
### Badges

Use `.badge`

**Aditional Sizes:** `.badge-xs`, `.badge-sm` `.badge-lg` `.badge-xl`.

**Available Colors:** `.badge-dark`, `.badge-light`

You can use `.badge-dark` or `.badge-light` OR JUST `.badge`,  and then apply `.bg-*` and `.text-*` or even `.bg-gradient-*`




---
### Colors

**Available Colors:*** Available form: primary, secondary, black, white, gray, blue, indigo, purple, red, green, teal, yellow, orange.

**Text:** `.color-*`, also with variants `.color-gray-100` to `.color-gray-900` (variants not available in black, dark and light.)

**BG:** `.bg-*`, Available form: primary, secondary, black, white, gray, blue, indigo, purple, red, green, teal, yellow, orange. and also with variants `.bg-gray-100` to `.bg-gray-900` (not available in black, dark and light.). 
*-500 is the base color of each variant group

You can use .bg-gradient-* like .bg-gradient-gray

You can also use it with `.md-bg-*` `.md-color-*` to target desktop




---
### BG Images

**Sizes:** `.bg-repeat`, `.bg-no-repeat` `.bg-repeat-x` `.bg-repeat-y` `.bg-repeat-round` `.bg-repeat-space` `.bg-auto` `.bg-contain` `.bg-cover`

**Position:** `.bg-c` `.bg-t` `.bg-b` `.bg-l` `.bg-r` `.bg-tl`, `.bg-tr` `.bg-tc` `.bg-bl` `.bg-br` `.bg-bc`

You can use `.badge-dark` or `.badge-light` OR JUST `.badge`,  and then apply `.bg-*` and `.text-*` or even `.bg-gradient-*`



---
### Images and Media

Use `.img-fluid`

**Sizes:** `.object-contain` `.object-cover` `.object-fill` `.object-none` `.object-scale-down` `.object-top` `.object-bottom` `.object-center` `.object-left` `.object-right` `.object-left-bottom` `.object-left-top` `.object-right-top` `.object-right-bottom` 

**Available Colors:** `.badge-dark`, `.badge-light`

You can use `.badge-dark` or `.badge-light` OR JUST `.badge`,  and then apply `.bg-*` and `.text-*` or even `.bg-gradient-*`





---
### Borders and Rounded/Radius

Use `.rounded`

**Sizes:** `.rounded-none` `.rounded-sm` `.rounded` `.rounded-lg` `.rounded-full` `.rounded-circle`.

Also you can target mobile `.sm-*` or desktop `.md-*` only




---
### Overflow

`.overflow-auto` `.overflow-hidden` `.overflow-visible` `.overflow-scroll` `.overflow-x-auto` `.overflow-y-auto` `.overflow-x-hidden` `.overflow-y-hidden` `.overflow-x-visible` `.overflow-y-visible`

`.scroll-x ` `.scroll-y ` `.scroll-touch ` `.scroll-auto`


---
### Opacity

`.opacity-0` `.opacity-25` `.opacity-50` `.opacity-75` `.opacity-100`



---
### Icons
Font awesome is included

To create layered icons you can use `.icon-layer` with `.icon-badge` `.icon-badge-primary` `.icon-badge-orange` `.icon-calendar` and `.icon-file`




---
### Animations

`.zoom`






---
# Forms

Basic: `.form-basic` `.form-basic-select`
Basic: `.form-clean` `.form-clean-select`
Basic: `.form-muted` `.form-muted-select`
Basic: `.form-inner` `.form-inner-select`

```html
<div class="form-basic required">
  <label for="text">Text Field</label>
  <input type="text" id="text" placeholder="Your Text">
  <small class="form-text text-muted">Something.</small>
</div>
```

Sizes: `.form-lg` `.form-sm`

Position: `.form-inline`

#### Checkboxes and Radios

`.form-checkbox`  `.form-radio` `.form-switch`

#### Selects

To show select as button `.form-select-btn`

#### Big Search Input

`.big-search` with an option of `.typeahead` to add a delete icon and hide search icon
```html
<form role="search" method="post" class="big-search typeahead form-lg">
  <input type="search" autofocus="" placeholder="something goes here" name="s">
  <i class="fa fa-search"></i>
</form>
```


---
## JS
Includes vue, axis and v-validate V2