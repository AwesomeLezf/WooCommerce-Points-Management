<h1 align="center">WooCommerce Points Management</h1>

Woocommerce Points Management it's a plugin that's gonna change your shop it to loyalty program. In which you can assign points for your clients, which they can use to buy products.

## Getting Started

Just download the plugin and run.

## Shortcodes

To display points history you can use:

```bash
 # with the default values of the current user and styling
 [wcp_get_history]
 # Parameters
 # user_id
 # single_data by default 'false'
 # return just array
  [wcp_get_history single_data='true']
```

To display additional plugin fields use:

```bash
 # with the default values of the current gona retunr count of points
 [wcp_get_field]
 # Parameters
 # user_id
 # field_key by default 'points',

```

## Tailwind classes

Used in history Shortcodes

```bash
mt-4,
mb-8,
mr-4,
hidden,
md:hidden,
block,
flex,
flex-col,
items-center,
grid,
md:grid,
grid-cols-1,
grid-cols-6,
sm:grid-cols-2,
md:col-span-4,
md:grid-cols-6,
gap-4,
sm:gap-4,
col-span-4,
w-8,
h-8,
h-16,
py-2,
sm:py-0,
sm:py-4,
px-6,
bg-[#FCFCFC],
bg-[#DFF2BF],
bg-[#FFBABA],
bg-primary,
md:bg-transparent,
rounded-md,
text-white,
text-black,
text-lg,
text-xl,
md:text-2xl
font-bold,
```

### Prerequisites

- [PHP 7.4](https://www.php.net/manual/en/install.php): WooCommerce Points Management Core currently features a minimum PHP version of 7.4. It is also needed to run Composer and various project build scripts.

## Reporting Issues

To disclose a issue write to me on marcinkov175@gmail.com.
