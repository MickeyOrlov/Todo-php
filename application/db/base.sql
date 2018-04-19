CREATE TABLE task (
	id_task INTEGER  PRIMARY KEY,
	name TEXT NOT NULL,
	status INTEGER NOT NULL
);

INSERT INTO task (name, status)
VALUES ('task_1', 'true');

INSERT INTO task (name, status)
VALUES ('task_2', 'true');