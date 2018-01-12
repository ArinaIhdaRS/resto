
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
gambar varchar(100),
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



select*from menu;




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

insert into restoran.menu value('1','Bebek Cabe Ijo','40000','bebek goreng ijo.png','Makanan'); 
insert into restoran.menu value('2','Kerang Asam manis','50000','kerang asam manis.png','Makanan');
insert into restoran.menu value('3','Gurame Saus Tauco','25000','gurame saus tauco.png','Makanan');
insert into restoran.menu value('4','Gurame Asam Manis','30000','gurame asam manis.png','Makanan');
insert into restoran.menu value('5','Dendeng Balado','35000','dendeng balado.png','Makanan');
insert into restoran.menu value('6','Bebek Goreng Kelapa','35000','bebek goreng kelapa.png','Makanan');
insert into restoran.menu value('7','Balado Kerang Pedas','45000','balado kerang pedas.png','Makanan');
insert into restoran.menu value('8','Ayam Bakar Madu','25000','ayam bakar madu.png','Makanan');
insert into restoran.menu value('9','Nasi Goreng Sosis','15000','nasi goreng sosis.png','Makanan');
insert into restoran.menu value('10','Udang Tepung Gendut','20000','udang tepung.png','Fast Food');
insert into restoran.menu value('11','Macaroni Asam Pedas','25000','macaroni asam pedas.png','Fast Food');
insert into restoran.menu value('12','Spaghetti Saus Ikan','25000','spaghetti saus ikan.png','Fast Food');
insert into restoran.menu value('13','Ayam Goreng Tepung','10000','ayam goreng tepung.png','Fast Food');
insert into restoran.menu value('14','Chicken Wings','30000','chicken wings.png','Fast Food');
insert into restoran.menu value('15','Roti Jalo Kuah Kari','35000','roti jalo.png','Fast Food');
insert into restoran.menu value('16','Burger Egg Cheese','16000','egg cheese burger.png','Fast Food');
insert into restoran.menu value('17','Roll Sushi Tuna','30000','roll sushi tuna.png','Fast Food');
insert into restoran.menu value('18','Mie Setan','20000','mie setan.png','Fast Food');
insert into restoran.menu value('19','Molen Kacang Hijau','5000','molen kacang hijau.png','Snack');
insert into restoran.menu value('20','Kue Cubit','10000','kue cubit.png','Snack');
insert into restoran.menu value('21','Otak2 Udang Keju','15000','otak udang keju.png','Snack');
insert into restoran.menu value('22','Donat Kentang','15000','donat kentang.png','Snack');
insert into restoran.menu value('23','Siomay Bandung','30000','siomay bandung.png','Snack');
insert into restoran.menu value('24','Rolade Tahu','20000','rolade tahu.png','Snack');
insert into restoran.menu value('25','Onion Ring','10000','onion ring.png','Snack');
insert into restoran.menu value('26','Puding Lumut','10000','puding lumut.png','Dessert');
insert into restoran.menu value('27','Oreo Cheese Cake','25000','oreo cheese cake.png','Dessert');
insert into restoran.menu value('28','Strawberry Cheese Cake','25000','strawberry cheese cake.png','Dessert');
insert into restoran.menu value('29','Cake Ubi Ungu','20000','cake ubi ungu.png','Dessert');
insert into restoran.menu value('30','Black Forest','25000','black forest.png','Dessert');
insert into restoran.menu value('31','Wafer Coklat Puding','20000','wafer coklat puding.png','Dessert');
insert into restoran.menu value('32','Es Krim Kacang Merah','28000','es krim kacang merah.png','Dessert');
insert into restoran.menu value('33','Ketan lapis Srikaya','20000','ketan lapis srikaya.png','Dessert');
insert into restoran.menu value('34','Pandan Roll Kismis','20000','pandan roll kismis.png','Dessert');
insert into restoran.menu value('35','Caramel Frappuccino','8000','caramel fc.png','Minuman');
insert into restoran.menu value('36','Susu Caramel Kopo','8000','susu karamel kopo.png','Minuman');
insert into restoran.menu value('37','Ice Caramel Macchiato','8000','caramel mc.png','Minuman');
insert into restoran.menu value('38','Capuccino Float','8000','capuccino float.png','Minuman');
insert into restoran.menu value('39','Jus Pisang','5000','jus pisang.png','Minuman');
insert into restoran.menu value('40','Jus Nangka','5000','jus nangka.png','Minuman');
insert into restoran.menu value('41','Jus Mangga','5000','jus mangga.png','Minuman');
insert into restoran.menu value('42','Jus Alpukat','5000','jus alpukat.png','Minuman');
insert into restoran.menu value('43','Jus Melon','5000','jus melon.png','Minuman');
insert into restoran.menu value('44','Jus Sirsak','5000','jus sirsak.png','Minuman');
insert into restoran.menu value('45','Jus Wortel','5000','jus wortel.png','Minuman');
insert into restoran.menu value('46','Es Kacang Ijo','12000','es kacang ijo.png','Minuman');
insert into restoran.menu value('47','Rainbow Juice','12000','rainbow juice.png','Minuman');
insert into restoran.menu value('48','Strawberry Ice Tea','12000','strawberry iced.png','Minuman');
insert into restoran.menu value('49','Smoothie Mangga','12000','smoothie mangga.png','Minuman');
insert into restoran.menu value('50','Es Kopyor','8000','es kopyor.png','Minuman');




