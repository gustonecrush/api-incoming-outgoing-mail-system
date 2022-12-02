# DOCUMENTATION

## ABOUT

Si Suka stands for Incoming and Outgoing Mail Information System which is the author's practical work report project and at the same time will also become an icon of the practical work report that the author made.

The name Si Suka itself was inspired by the name of an application that is also in the Palembang Class I Radio Frequency Spectrum Monitoring Center, namely Si Maya. The creation of Si Like is the result of direct research and the results of consultation with the Staff of the Palembang Class 1 Radio Frequency Spectrum Monitoring Center.

API that can be used to get, post, delete, also update data about Surat Masuk, Surat Keluar, Peminjaman Arsip, etc. This API is used to build the web SISUKA ( Sistem Informasi Surat Masuk dan Surat Keluar ) by BALMON Palembang.

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

## ERD

<img src="https://i.postimg.cc/mg7YWqvn/SISUKA-drawio-1.png" style="width: 900px" />

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

### Get Surat Keluar

Request :

- Method : GET
- Endpoint : `/api/surat-keluar`
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
      "tujuan" : "string",
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

### Post Surat Keluar

- Method : POST
- Endpoint : `/api/surat-keluar`
- Header :
  - Content-Type: application/json
  - Accept: application/json
- Body :

```json
{
  "tanggal_surat" : "date",
  "nomor_surat" : "string",
  "tujuan" : "string",
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
      "tujuan" : "string",
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

### Update Surat Keluar

- Method : PUT
- Endpoint : `/api/surat-keluar/{id}`
- Header :
  - Content-Type: application/json
  - Accept: application/json
- Body :

```json
{
  "tanggal_surat" : "date",
  "nomor_surat" : "string",
  "tujuan" : "string",
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
      "tujuan" : "string",
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

### Delete Surat Keluar

- Method : DELETE
- Endpoint : `/api/surat-keluar/{id}`
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
      "tujuan" : "string",
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

### Get Peminjaman Arsip

Request :

- Method : GET
- Endpoint : `/api/peminjaman-arsip`
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
      "nama_peminjam" : "string",
      "jenis_arsip" : "string",
      "tanggal_peminjaman" : "date",
      "tanggal_pengembalian" : "date",
      "uploaded_at" : "timestamp"
    },
  ]
}
```

### Post Peminjaman Arsip

- Method : POST
- Endpoint : `/api/peminjaman-arsip`
- Header :
  - Content-Type: application/json
  - Accept: application/json
- Body :

```json
{
   "nama_peminjam" : "string",
   "jenis_arsip" : "string",
   "tanggal_peminjaman" : "date",
   "tanggal_pengembalian" : "date",
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
      "nama_peminjam" : "string",
      "jenis_arsip" : "string",
      "tanggal_peminjaman" : "date",
      "tanggal_pengembalian" : "date",
      "uploaded_at" : "timestamp"
  },
}
```

### Update Peminjaman Arsip

- Method : PUT
- Endpoint : `/api/peminjaman-arsip/{id}`
- Header :
  - Content-Type: application/json
  - Accept: application/json
- Body :

```json
{
   "nama_peminjam" : "string",
   "jenis_arsip" : "string",
   "tanggal_peminjaman" : "date",
   "tanggal_pengembalian" : "date",
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
      "nama_peminjam" : "string",
      "jenis_arsip" : "string",
      "tanggal_peminjaman" : "date",
      "tanggal_pengembalian" : "date",
      "uploaded_at" : "timestamp"
  },
}
```

### Delete Peminjaman Arsip

- Method : DELETE
- Endpoint : `/api/peminjaman-arsip/{id}`
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
      "nama_peminjam" : "string",
      "jenis_arsip" : "string",
      "tanggal_peminjaman" : "date",
      "tanggal_pengembalian" : "date",
      "uploaded_at" : "timestamp"
  },
}
```
