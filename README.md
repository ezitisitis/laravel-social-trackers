# Laravel social trackers

## Install

First of all- install package.

```bash
composer require ezitisitis/laravel-social-trackers
```

Now populate `services` config with config values:

```php
'google_tag_manager_id' => env('GOOGLE_TAG_MANAGER_ID'),
```

## Usage

Simply put `Tracker::your_desired_tracker` to the `head` section. For example:

```blade
<head>
    ...
    {{\Ezitisitis\LaravelTracking\Tracker::googleTagManager()}}
    ...
</head>
<body>
    {{\Ezitisitis\LaravelTracking\Tracker::googleTagManagerNoScript()}}
    ...
</body>
```

## Credits

- [Marks Bogdanovs](https://www.ezitisitis.com)
