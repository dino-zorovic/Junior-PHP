First I used sql.php to create a database.
In index.php we have 2 forms:
1. First one is for inserting users into the database and does so via insert.php
2. Second one is for displaying selected users. It dynamically populates user_id from which we display users and does so via fetch.php

Unfortunately i couldn't put this test online because MySQL version is 5.1.73 and that version doesn't support two CURRENT_TIMESTAMP. I worked on my localhost which has higher version so it was working perfectly there.
