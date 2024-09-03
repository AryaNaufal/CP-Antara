## Geting Started

First, clone the repository to /htdocs if use xampp and /www if use laragon:

```bash
git clone https://github.com/AryaNaufal/toko-onlen.git
```

then, import the database:

```bash
mysql -u root -p
# and
source # path to sql file
# or
import manualy
```

then, install composer

```bash
composer install
```

then, insert credentials for google OAuth2

```bash
$client_id = 'YOUR_CLIENT_ID';
$client_secret = 'YOUR_CLIENT_SECRET';
```

Open [http://localhost/CP-Antara](http://localhost/CP-Antara) with your browser to see the result.
