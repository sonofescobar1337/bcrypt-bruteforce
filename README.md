# bcrypt-bruteforce
code ini adalah versi lain dari https://github.com/indoxploit-coders/hash-decrypt

Decrypt Password_Hash dan Crypt menggunakan Brute Force

- https://exploit.linuxsec.org/decrypt-password_hash-dan-crypt-menggunakan-brute-force/

## USAGE
```php
php script.php wordlist.txt
```

jangan lupa mengganti line 6 dan 8 pada code

untuk windows
```php
$list_to_dec = explode("\r\n", file_get_contents("list-to-dec.txt")); //sesuaikan dengan file kalian

$word = explode("\r\n", file_get_contents($argv[1]));
```

untuk linux 
```php
$list_to_dec = explode("\n", file_get_contents("list-to-dec.txt")); //sesuaikan dengan file kalian
$word = explode("\n", file_get_contents($argv[1]));
```

Untuk wordlist kalian bisa lakukan riset sendiri ya di google
## Disclaimer

**Using this tool for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program**


## Copyright
[indoxploit-coders](https://github.com/indoxploit-coders/hash-decrypt) <br>
[0xAsuka](https://github.com/0xAsuka) <br>
[sonofescobar1337](https://github.com/sonofescobar1337)

![Screenshots 1](https://github.com/sonofescobar1337/bcrypt-bruteforce/blob/main/skringsut/skringsut.png?raw=true)