# DOCUMENTATION

## ABOUT

## START PROJECT

- Download this project and save to your local
- Run `composer install` to install all dependencies needed
- Open your computer server to run your server, then create new database on your database
- Configure your .env file, go to database section, and configure the database according to the database you are using, the user, and the password you are using as below
  ```
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=8889
      DB_DATABASE=db_sisuka
      DB_USERNAME=root
      DB_PASSWORD=root
  ```
- After that, you can run command `php artisan migrate` to generate all table migrations which is exist in this project
- Then, you can run command `php artisan db:seed` to seed your database with all data dummies
- Then, you can run command `php artisan serve` to start your laravel server and try the endpoint has been build

## API ENDPOINT

### Get Surat Masuk

Request :

- Method : GET
- Endpoint : `/api/surat-masuk`
- Header :
  - Accept: application/json

Response :

```json
{
  "status": "boolean",
  "status_code": "integer",
  "message": "string",
  "total" : "integer",
  "data": [
    {
      "session_id" : "integer",
      "token_surat" : "string",
      "tanggal_surat" : "date",
      "nomor_surat" : "string",
      "asal" : "string",
      "kode_klasifikasi" : "string",
      "perihal" : "string",
      "kode_filling" : "string",
      "keterangan" : "string",
      "dokumen" : "string",
      "original_name_dokumen" : "string",
      "uploaded_at" : "timestamp"
    },
  ]
}
```

### Post Surat Masuk

- Method : POST
- Endpoint : `/api/surat-masuk`
- Header :
  - Content-Type: application/json
  - Accept: application/json
- Body :

```json
{
  "tanggal_surat" : "date",
  "nomor_surat" : "string",
  "asal" : "string",
  "kode_klasifikasi" : "string",
  "perihal" : "string",
  "kode_filling" : "string",
  "keterangan" : "string",
  "dokumen" : "file",
}
```

Response :

```json
{
  "status": "boolean",
  "status_code": "integer",
  "message": "string",
  "total" : "integer",
  "data": {
      "session_id" : "integer",
      "token_surat" : "string",
      "tanggal_surat" : "date",
      "nomor_surat" : "string",
      "asal" : "string",
      "kode_klasifikasi" : "string",
      "perihal" : "string",
      "kode_filling" : "string",
      "keterangan" : "string",
      "dokumen" : "string",
      "original_name_dokumen" : "string",
      "uploaded_at" : "timestamp"
  },
}
```

### Update Surat Masuk

- Method : PUT
- Endpoint : `/api/surat-masuk/{id}`
- Header :
  - Content-Type: application/json
  - Accept: application/json
- Body :

```json
{
  "tanggal_surat" : "date",
  "nomor_surat" : "string",
  "asal" : "string",
  "kode_klasifikasi" : "string",
  "perihal" : "string",
  "kode_filling" : "string",
  "keterangan" : "string",
  "dokumen" : "file",
}
```

Response :

```json
{
  "status": "boolean",
  "status_code": "integer",
  "message": "string",
  "total" : "integer",
  "data": {
      "session_id" : "integer",
      "token_surat" : "string",
      "tanggal_surat" : "date",
      "nomor_surat" : "string",
      "asal" : "string",
      "kode_klasifikasi" : "string",
      "perihal" : "string",
      "kode_filling" : "string",
      "keterangan" : "string",
      "dokumen" : "string",
      "original_name_dokumen" : "string",
      "uploaded_at" : "timestamp"
  },
}
```

### Delete Surat Masuk

- Method : DELETE
- Endpoint : `/api/surat-masuk/{id}`
- Header :
  - Content-Type: application/json
  - Accept: application/json

Response :

```json
{
  "status": "boolean",
  "status_code": "integer",
  "message": "string",
  "total" : "integer",
  "data": {
      "session_id" : "integer",
      "token_surat" : "string",
      "tanggal_surat" : "date",
      "nomor_surat" : "string",
      "asal" : "string",
      "kode_klasifikasi" : "string",
      "perihal" : "string",
      "kode_filling" : "string",
      "keterangan" : "string",
      "dokumen" : "string",
      "original_name_dokumen" : "string",
      "uploaded_at" : "timestamp"
  },
}
```
