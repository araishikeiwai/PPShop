PPShop
======

PP CMS to ease of selling PP

Specs:
- Built on CodeIgniter 2.2.0
- MySQL
- Responsive Themes by Bootstrap
- CKeditor for WYIWYG editor
- Icons by Stylistica

Setup pertama kali:
- Setting database username dan password di application/config/database.php
- Import: base.sql pada folder sql/base.sql
- password default admin: adminpp, harap diganti secepatnya

Docs:
- Untuk PP JKT gunakan others jika tidak jelas rilisnya
- Jika gunakan upload dari lokal, harap kosongkan external url field. Lakukan hal yang sama sebaliknya
- Sementara page management belum selesai, untuk about dan contact harap jangan diganti judulnya, tapi boleh diganti kontennya
- Sementara Featured PP 2 saja
- Jika lupa password admin, harap ganti sendiri pada phpmyadmin
- PP dengan link eksternal tidak bisa dimasukkan dalam featured
- Slider text ganti sendiri di application/views/index.php


Still Buggy:
- Pagination on category
- ID System to be changed
- Multiple Upload
- Pages management
- Datatables on manage PP
- Search Function on manage PP, sementara pake ctrl+f aja
