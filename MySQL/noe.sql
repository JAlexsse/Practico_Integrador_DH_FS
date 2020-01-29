alter table categoria
add foreign key (id_categoria_padre) references categoria(id_categoria);
