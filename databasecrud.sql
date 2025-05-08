create table
    if not exists products (
        id int primary key auto_increment,
        name varchar(255),
        description varchar(255),
        price double (10, 2) null,
        photo varchar(255),
        created_at timestamp default current_timestamp,
        updated_at timestamp null on update current_timestamp
    )
insert into
    products (name, price)
values
    ("Apple", 10.5),
    ("Rice", 300.5),
    ("Flour", 160.5),
    ("Oats", 350.5),
    ("Water", 16.5),
    ("Nuts", 30.5),
    ("Honey", 500.5);