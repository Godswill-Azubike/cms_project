# Projust prototype

**Database models**

database with the following tables

`categories tb`

    1 = id col
    2 = cat_name col
    3 = cat_details col
    4 = created_at col

`posts tb`

    1 = id col
    2 = post_title col
    3 = post_body col
    4 = post_auth col
    5 = post_image col
    6 = cat_id col
    7 = created_at col

`comments tb`

    1 = id col
    2 = user_name col
    3 = comment col
    4 = post_id col
    5 = created_at col

`admins tb`

    1 = id col
    2 = email col
    3 = name col
    4 = password col
    5 = super_admin col
    6 = created_at col


**controllers operations**

~crud on post~

`we want to have the ability to:`
    1 = make new post;
    2 = read or fetch out all the post
    3 = read out single post 
    4 = search for post
    5 = edit these post 
    6 = delete these post

    categories '' ''

    admin '' ''

**authentication**

    setting up login auth
    creating privilages for super admins
