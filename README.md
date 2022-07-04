## PHP Guestbook
This repository contains a guestbook style website, it's a becode consolication challenge to learn how to store data in files, convert constructs like objects and arrays to a string and deliver a project under a 'strict' deadline.

## Roadmap
- First I made an MVC structure so I could achieve following points:
    - Show previously posted messages on page load
    - Have the option to get a form on the site (By clicking a button) to leave a message
    - Have a structured project with split up files and logic
- To achieve this, since it's only a single page site I created the following:
    - A GuestBookController
        To make sure the guestbook page loads the right view components depending on what http request was made
    - Some models
        - A Post class
            To make sure every Post is it's own object and be able to create, store, recreate guest's posts on the fly and display them accordingly in a loop in my controller
        - Post Handlers
            - A handler that correctly saves a Post to a json file
                To make this work correctly I had to implement the 'JsonSerializable' interface into my post class
                Then I was able to provide a method that would tell json_encode how to encode the file (since the Post's attributes are private!)
                Eventually I made sure that the saver would also add the Date/Time of creation to the post, so that this data is stored correctly and isn't changed, since if Post did it itself it would be overwritten when they are loaded and 'recreated' and if the postloader did it, well I would have the time of loading instead.
            - A handler that correctly loads a Post
                Since I had the post class, and I managed to correctly store posts in the json(as an array) my main goal was to be able to let this handler create an array containing posts generated from the posts.json data and have a method that would return that array so I could loop over it in my controller.
                Since the class is called PostLoader, I figured it should load available posts on creation!
    - Some Views
        - The html skeleton
            To make sure my files have the right structure I started creating a header/footer view that contains the HTML head, and the closing tags
            Next I implemented TailWind CSS to prevent myself spending a couple hours trying to center Divs in CSS and use utility classes instead straight in my php files.
        - The guestbook page
            Here I basicly just opened some containers so tailwind's magic would make the page nice and responsive!
            Next I added the button user's could use to leave a new message.
            Now I needed 2 things, a way to show a post, and a form to get the new post on to the site.
            So I created a postview, and a postFormView, after making sure everything looks nice even when 100s of static 'postViews' are added to the page.
            Everything is looking decent, I can echo hello world when the 'Leave a message' button is pressed, Time to glue everything together

I really like how this turned out, everythign is snappy, responsive and works as intended. I am verry happy I took this whole project on in tiny steps. and how the filestructure makes it really easy to change thigns up, add new things or remove things I no longer want.
