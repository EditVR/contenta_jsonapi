# EditVR - Contenta

This is a modified version of Content CMS to customized to support EditVR. 

[EditVR](https://editvr.io/)

Contenta is a content API and CMS based on Drupal 8. It provides a standard, jsonapi-based platform for building decoupled applications and websites.

## Install

- Install [composer](https://getcomposer.org/)


```bash
composer create-project editvr/editvr-project editvr --stability dev --no-interaction
```

For documention on the development on contenta_jsonapi itself, see [docs/development](https://github.com/contentacms/contenta_jsonapi/blob/8.x-1.x/docs/development.md).

[Code of conduct](https://https://github.com/contentacms/contenta_jsonapi/blob/8.x-1.x/CODE_OF_CONDUCT.md)

### Development Installation

```bash
`lando init -r drupal8` 
```
- Set webroot to: `web`
- Choose a name

```bash
`lando start`
```


## Credits

This work is based upon a couple of contrib modules.

On top of that the [thunder distrbution](http://www.thunder.org/) was used as sort of a base for this installation profile.

Contenta CMS is [built by humans](https://raw.githubusercontent.com/contentacms/contenta_jsonapi/8.x-1.x/humans.txt).
