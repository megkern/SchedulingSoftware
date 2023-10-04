/* ************************ CREATE ***************************** */
CREATE TABLE user (
    user_id int(11) NOT NULL UNIQUE AUTO_INCREMENT, 
    display_name varchar(100) NOT NULL UNIQUE, /* 24 character limit */
    PRIMARY KEY (user_id) 
);

CREATE TABLE meeting (
    meeting_id int(11) NOT NULL UNIQUE AUTO_INCREMENT, 
    fk_creator_id int(11) NOT NULL, /* foreign key from user.user_id */
    meeting_title varchar(100) NOT NULL,
    PRIMARY KEY (meeting_id)
);

CREATE TABLE slot (
    slot_id int(11) NOT NULL UNIQUE AUTO_INCREMENT, 
    fk_meeting_id int(11) NOT NULL, /* foreign key from meeting.meeting_id */
    fk_attender_id int(11) DEFAULT NULL, /* foreign key from user.user_id */
    start_timestamp DATETIME NOT NULL,  
    end_timestamp DATETIME NOT NULL,
    PRIMARY KEY (slot_id)
);

/* ************************ INSERT ***************************** */
/* user */
INSERT INTO user (user_id, display_name)
VALUES (1,'megan');

INSERT INTO user (display_name)
VALUES ('kelsey');

/* meeting */
INSERT INTO meeting (
    meeting_id,
    fk_creator_id,
    meeting_title
)
VALUES (
1,
1,
'Our First Meeting'
);

/* slot */
INSERT INTO slot (
    fk_meeting_id,
    fk_attender_id,
    start_timestamp,
    end_timestamp
) VALUES (
    1,
    1,
    '20231118 11:30:00 AM',
    '20231118 11:50:00 AM'
);

INSERT INTO slot (
    fk_meeting_id,
    start_timestamp,
    end_timestamp
) VALUES (
    1,
    '20231119 10:30:00 AM',
    '20231119 10:50:00 AM'
);