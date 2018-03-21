Tasks:
2018/01/30
- Seperate page layout elements into different sections
- Header, Navbars, Content(Jumbo Carousel), footer

2018/01/31
- Update site index page content
Index page elements
Header
Navbars
Carousel
Top internship jobs
How to Apply, so easy
FAQ
Footer-contact info

- Header: Better internships, all capital words
- Navbars links: Internship Jobs,Apply now,About,Contact

2018/02/09
- Create database table for posts,users

User is able to save zero, one or more favorited posts
Guest can register an account with name, email and password fields
After registered send email notifiction with mailgun service or webhosting free email service?
User login in and redirect to dashboard section, showing saved favorited posts or "you don't have any saved posts"
User can remove any post 

[posts] table
	id
	title
	body
	created_at
	updated_at
[user] table
	id
	name
	email
	password
	created_at
[user_has_posts] table
user_id
post_id->unique
2018/02/11
Admin page
create a new post form

2018/02/20
finish the job listing page with search function
重点放在找工作列表页面，免费列出来，免费申请时候酌情看工作性质好坏收费，附加服务费
-Addition features : each job has social media share functions

/posts: search form with top jobs
/posts/search: list searched jobs with pagination
2018/02/26

Post has many likes
user has many likes
one like belongs to user

Post belongs to one category
category has many posts


Tables:
user
post
user_post

user: id
post: id
post_user:post_id, user_id

1,1
1,3
1,4
2,1
3,1
4,1

2018/03/13
ajax call for save post function

2018/03/15
Dashboard , account setting



