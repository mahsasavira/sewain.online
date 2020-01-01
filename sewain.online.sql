/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     01/01/2020 14.36.23                          */
/*==============================================================*/


drop table if exists BARANG;

drop table if exists PEMBAYARAN;

drop table if exists SEWAAN;

drop table if exists TRANSAKSI_SEWA;

drop table if exists USER;

drop table if exists USER_DETAIL;

/*==============================================================*/
/* Table: BARANG                                                */
/*==============================================================*/
create table BARANG
(
   ID_BARANG            int not null auto_increment,
   NAMABARANG           varchar(30) not null,
   JENIS                varchar(15) not null,
   DESKRIPSI            varchar(200) not null,
   STATUS               varchar(10) not null,
   HARGA                varchar(20) not null,
   GAMBAR               varchar(30) not null,
   primary key (ID_BARANG)
);

/*==============================================================*/
/* Table: PEMBAYARAN                                            */
/*==============================================================*/
create table PEMBAYARAN
(
   ID_PEMBAYARAN        int not null auto_increment,
   ID_TRAKSAKSI         int,
   STATUS               varchar(10) not null,
   TGL_BAYAR            datetime not null,
   primary key (ID_PEMBAYARAN)
);

/*==============================================================*/
/* Table: SEWAAN                                                */
/*==============================================================*/
create table SEWAAN
(
   ID_SEWAAN            int not null auto_increment,
   ID_BARANG            int,
   ID_USER              int,
   TARIF                int not null,
   DURASI_SEWA          datetime not null,
   STATUS               varchar(10) not null,
   primary key (ID_SEWAAN)
);

/*==============================================================*/
/* Table: TRANSAKSI_SEWA                                        */
/*==============================================================*/
create table TRANSAKSI_SEWA
(
   ID_TRAKSAKSI         int not null auto_increment,
   ID_SEWAAN            int,
   ID_USER              int,
   TGL_TRANSAKSI        datetime not null,
   LAMA_SEWA            datetime not null,
   TOTAL_TARIF          int not null,
   primary key (ID_TRAKSAKSI)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null auto_increment,
   USERNAME             varchar(20) not null,
   PASSWORD             varchar(12) not null,
   EMAIL                varchar(30) not null,
   ROLE                 varchar(30) not null,
   primary key (ID_USER)
);

/*==============================================================*/
/* Table: USER_DETAIL                                           */
/*==============================================================*/
create table USER_DETAIL
(
   NAMA                 int not null,
   ALAMAT               varchar(50) not null,
   KOTA                 varchar(15) not null,
   STATUS               varchar(10) not null,
   ID_DETAIL_USER       int not null auto_increment,
   ID_USER              int,
   KTP                  varchar(10) not null,
   SIM                  varchar(10) not null,
   KK                   varchar(10) not null,
   KARTU_PELAJAR        varchar(10) not null,
   primary key (ID_DETAIL_USER)
);

alter table PEMBAYARAN add constraint FK_RELATIONSHIP_3 foreign key (ID_TRAKSAKSI)
      references TRANSAKSI_SEWA (ID_TRAKSAKSI) on delete restrict on update restrict;

alter table SEWAAN add constraint FK_RELATIONSHIP_1 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table SEWAAN add constraint FK_RELATIONSHIP_2 foreign key (ID_BARANG)
      references BARANG (ID_BARANG) on delete restrict on update restrict;

alter table TRANSAKSI_SEWA add constraint FK_RELATIONSHIP_4 foreign key (ID_SEWAAN)
      references SEWAAN (ID_SEWAAN) on delete restrict on update restrict;

alter table TRANSAKSI_SEWA add constraint FK_RELATIONSHIP_5 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table USER_DETAIL add constraint FK_RELATIONSHIP_6 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

