CREATE TABLE account(
   
   accountID        SERIAL      PRIMARY KEY,
   emailAdd         TEXT        NOT NULL UNIQUE,
   password         TEXT	    NOT NULL,
   firstname        TEXT		NOT NULL,
   lastname         TEXT		NOT NULL,
   address	        TEXT		NOT NULL,
   region	        TEXT		NOT NULL,
   accountType      TEXT,
   accountStatus    TEXT
   
   		/*CONSTRAINT account_type CHECK (accountType = ANY( ARRAY['Master','Sub','Other'])),
		CONSTRAINT account_status CHECK (accountStatus = ANY( ARRAY['Active','Suspended','Banned','Other']))*/
		CONSTRAINT fk_account_activities FOREIGN KEY (activitiesID) REFERENCES account(activitiesID)
);

CREATE TABLE activities(
   activitiesID     SERIAL     PRIMARY KEY,
   mth              numeric    NOT NULL,
   yr               numeric    NOT NULL,
   activity         TEXT
);