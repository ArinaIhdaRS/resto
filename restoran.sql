
/*bikin skemanya 'restoran' */

/* Jangan ctrl+A trus execute, you guys won't do that juseyo */

/*Tabelnya Di execute satu satu ja klo pina error*/


create table restoran.meja(
id_meja varchar(10) primary key not null,
username varchar(20),
password varchar(20)
);

create table restoran.menu(
id_menu int(11) primary key not null,
nama varchar(100),
harga int(11),
gambar blob,
kategori varchar(100)
);

create table restoran.pembayaran(
id_transaksi int(10) primary key not null,
tgl_transaksi date,
id_meja varchar(10),
total_bayar decimal
);

alter table restoran.pembayaran
add constraint mejafk
foreign key (id_meja)
references restoran.meja(id_meja) ;

create table restoran.detail_pembayaran(
id_transaksi int(10),
id_menu int(11),
jumlah_pesanan int(11)
);

alter table restoran.detail_pembayaran 
add constraint transaksifk 
foreign key (id_transaksi)
references restoran.pembayaran(id_transaksi);

alter table restoran.detail_pembayaran 
add constraint menufk
foreign key (id_menu)
references restoran.menu(id_menu);








/* untuk VIEW klo mau di execute execute, mau kd usah kd ppa jua, serah ja sih */

/*View untuk tabel pemesanan*/

create view pesanan as select 
menu.nama as Menu,
detail_pembayaran.jumlah_pesanan as Jumlah,
menu.harga as Harga,
pembayaran.total_bayar as Total 
from detail_pembayaran
join pembayaran on detail_pembayaran.id_transaksi = pembayaran.id_transaksi
join menu on detail_pembayaran.id_menu = menu.id_menu;


/*create view orders 
as select 
menu.nama as Menu, 
detail_pembayaran.jumlah_pesanan as Jumlah,
menu.harga as Harga,
pembayaran.total_bayar as Total 
from detail_pembayaran
JOIN pembayaran ON detail_pembayaran.id_transaksi = pembayaran.id_transaksi
JOIN menu ON detail_pembayaran.id_menu = menu.id_menu;
*/

create view orders 
as select 
menu.nama as Menu, 
detail_pembayaran.jumlah_pesanan as Jumlah,
menu.harga as Harga,
pembayaran.total_bayar as Total 
from detail_pembayaran
JOIN pembayaran ON detail_pembayaran.id_transaksi = pembayaran.id_transaksi
JOIN menu ON detail_pembayaran.id_menu = menu.id_menu;
















/* isi tabel meja */

insert into restoran.meja value('1','1','meja1');
insert into restoran.meja value('2','2','meja2');
insert into restoran.meja value('3','3','meja3');
insert into restoran.meja value('4','4','meja4');
insert into restoran.meja value('5','5','meja5');




/* isi tabel menu */
select*from restoran.menu;

insert into restoran.menu value('1','Bebek Cabe Ijo','40000','Makanan');
insert into restoran.menu value('2','Kerang Asam manis','50000','Makanan');
insert into restoran.menu value('3','Gurame Saus Tauco','25000','Makanan');
insert into restoran.menu value('4','Gurame Asam Manis','30000','Makanan');
insert into restoran.menu value('5','Dendeng Balado','35000','Makanan');
insert into restoran.menu value('6','Bebek Goreng Kelapa','35000','Makanan');
insert into restoran.menu value('7','Balado Kerang Pedas','45000','Makanan');
insert into restoran.menu value('8','Ayam Bakar Madu','25000','Makanan');
insert into restoran.menu value('9','Nasi Goreng Sosis','15000','Makanan');
insert into restoran.menu value('10','Udang Tepung Gendut','20000','Fast Food');
insert into restoran.menu value('11','Macaroni Asam Pedas','25000','Fast Food');
insert into restoran.menu value('12','Spaghetti Saus Ikan','25000','Fast Food');
insert into restoran.menu value('13','Ayam Goreng Tepung','10000','Fast Food');
insert into restoran.menu value('14','Chicken Wings','30000','Fast Food');
insert into restoran.menu value('15','Roti Jalo Kuah Kari','35000','Fast Food');
insert into restoran.menu value('16','Burger Egg Cheese','16000','Fast Food');
insert into restoran.menu value('17','Roll Sushi Tuna','30000','Fast Food');
insert into restoran.menu value('18','Mie Setan','20000','Fast Food');
insert into restoran.menu value('19','Molen Kacang Hijau','5000','Snack');
insert into restoran.menu value('20','Kue Cubit','10000','Snack');
insert into restoran.menu value('21','Otak2 Udang Keju','15000','Snack');
insert into restoran.menu value('22','Donat Kentang','15000','Snack');
insert into restoran.menu value('23','Siomay Bandung','30000','Snack');
insert into restoran.menu value('24','Rolade Tahu','20000','Snack');
insert into restoran.menu value('25','Onion Ring','10000','Snack');
insert into restoran.menu value('26','Puding Lumut','10000','Dessert');
insert into restoran.menu value('27','Oreo Cheese Cake','25000','Dessert');
insert into restoran.menu value('28','Strawberry Cheese Cake','25000','Dessert');
insert into restoran.menu value('29','Cake Ubi Ungu','20000','Dessert');
insert into restoran.menu value('30','Black Forest','25000','Dessert');
insert into restoran.menu value('31','Wafer Coklat Puding','20000','Dessert');
insert into restoran.menu value('32','Es Krim Kacang Merah','28000','Dessert');
insert into restoran.menu value('33','Ketan lapis Srikaya','20000','Dessert');
insert into restoran.menu value('34','Pandan Roll Kismis','20000','Dessert');
insert into restoran.menu value('35','Caramel Frappuccino','8000','Minuman');
insert into restoran.menu value('36','Susu Caramel Kopo','8000','Minuman');
insert into restoran.menu value('37','Ice Caramel Macchiato','8000','Minuman');
insert into restoran.menu value('38','Capuccino Float','8000','Minuman');
insert into restoran.menu value('39','Jus Pisang','5000','Minuman');
insert into restoran.menu value('40','Jus Melon','5000','Minuman');
insert into restoran.menu value('41','Jus Mangga','5000','Minuman');
insert into restoran.menu value('42','Jus Alpukat','5000','Minuman');
insert into restoran.menu value('43','Jus Melon','5000','Minuman');
insert into restoran.menu value('44','Jus Sirsak','5000','Minuman');
insert into restoran.menu value('45','Jus Wortel','5000','Minuman');
insert into restoran.menu value('46','Es Kacang Ijo','12000','Minuman');
insert into restoran.menu value('47','Rainbow Juice','12000','Minuman');
insert into restoran.menu value('48','Strawberry Ice Tea','12000','Minuman');
insert into restoran.menu value('49','Smoothie Mangga','12000','Minuman');
insert into restoran.menu value('50','Es Kopyor','8000','Minuman');
insert into restoran.menu value('51','Jus Pisang','5000','Minuman');




