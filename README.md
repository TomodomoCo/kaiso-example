# Kaisō Example

This is an example implementation of our [Kaiso](https://github.com/TomodomoCo/kaiso) library, which enables using controllers and dependency injection in WordPress.

This example also includes Twig templating.

Files of note:

+ `app/controllers/`: controllers (CamelCased versions of the templates in the hierarchy, with Controller appended. You could also have "PageController", "CategoryController", "Page[Slug]Controller", "Taxonomy[TaxonomySlug]Controller", etc.)
+ `app/views/`: Twig view files (These are named to correspond with the controllers, but definitely don't need to be!)
+ `public/content/themes/kaiso-theme/`: the theme that starts the whole operation (`index.php` is where the Kaiso app is set up and run.)

For more information on Kaiso, [visit its repo](https://github.com/TomodomoCo/kaiso).

## About Tomodomo

Tomodomo is a creative agency for communities. We focus on unique design and technical solutions to grow community activity and increase customer retention for online networking forums and customer service communities.

Learn more at [tomodomo.co](https://tomodomo.co) or email us: [hello@tomodomo.co](mailto:hello@tomodomo.co)

## License & Conduct

This project is licensed under the terms of the MIT License, included in `LICENSE.md`.

All open source Tomodomo projects follow a strict code of conduct, included in `CODEOFCONDUCT.md`. We ask that all contributors adhere to the standards and guidelines in that document.

Thank you!
