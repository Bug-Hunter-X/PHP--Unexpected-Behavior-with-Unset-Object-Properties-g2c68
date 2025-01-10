In PHP, a common yet subtle error arises when dealing with object properties that might not be set.  Attempting to access a property directly without checking its existence can lead to unexpected behavior or fatal errors. Consider this example:

```php
class User {
    public string $name;
    public ?string $email = null; // Nullable property
}

$user = new User();
$user->name = "John Doe";

echo "Email: " . $user->email; // Potential error!
```

If the `email` property hasn't been set, accessing `$user->email` will not produce a user friendly message, instead, it will result in a notice or warning, depending on PHP's error reporting level.  In stricter environments, this might halt execution.

This differs from languages like JavaScript or Python which would just return `undefined` or `None`.