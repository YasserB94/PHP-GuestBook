1. Have a guestbook website
    - [] User can leave a message
    - [] Message can be sent to server
2. Users can post on the site
    - [] Title
    - [] Date
    - [] Content
    - [] Author Name
3. Server handles request
    - [] Validate/Sanitize data
    - [] Store Data in file
4. Server Spits out older data on load
    - [] Creates Posts
    - [] Posts are displayed on the site on load

- Setup an MVC
    - [] Models
        - [] Post
    - [] Helpers
        - [] PostLoader
        - [] PostSaver
    - [] Views
        - [] header
        - [] footer
        - [] guestbook
        - [] components
            - [] postView
            - [] formView
    - [] Controllers
        - [] guestBookController
