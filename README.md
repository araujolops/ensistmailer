# Notification Library via email using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require araujolops/example
```

To make use of the library, simply require the autoload of the composer, invoke the class and make the method call:

```sh
<? php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$mail = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)"from@email.com", "From Name");

$email-> sendEmail ("Subject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of the email sending is using the magic method builder! Once the constructor method is invoked within your application, your system will be able to fire the shots.

### Developers
* [Alexandre] - Developer at Ensist Sistemas e Informática!
* [Ensist Sistemas] - Official website of the company. Development of specific systems.
* [phpMailer] - Lib to send E-mail

License
----

MIT

** Basic e-mail sending library. Feel free to improve it. **

[//]: #
[Alexandre]: <mailto: alexandre@ensist.com.br>
[Ensist Sistemas]: <http://www.ensist.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
