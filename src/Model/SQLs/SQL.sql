CREATE TABLE post (
	id BIGINT AUTO_INCREMENT,
    id_auth integer (11),
	name varchar (68),
	title varchar (68),
    category varchar (68),
    description varchar (255),
    PRIMARY KEY(id)
);


CREATE TABLE chapter (
	id integer (11),
    id_post integer (11),
	name varchar (68),
	title varchar (68),
    description varchar (255),
    PRIMARY KEY(id, id_post)
);