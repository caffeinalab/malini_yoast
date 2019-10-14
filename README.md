# malini_yoast
Malini Accessors and Decorators for YOAST

# Malini YOAST

Malini Accessors and Decorators for Yoast SEO.

Depends on both:
* [Malini](https://github.com/caffeinalab/malini);
* [Yoast SEO](https://it.wordpress.org/plugins/wordpress-seo).

## Decorators:

Adds the **Yoast** decorator:

```
malini_post()->decorate('yoast');
```

Accepted options:
- `filter`: the attributes we want to retrieve; [see filter option syntax](https://github.com/caffeinalab/malini/wiki/filter-option-syntax).