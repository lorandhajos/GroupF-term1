# Frontend Guidelines

## gerneal 

We use camelcase writing our code
example:  variableOne ; functionDoSomething

everything we code must be published through git

1. Open your terminal/console 
2. Navigate to the folder where the hole project lies in(the hole dockercontainer) (Use CD to do that)
3. git add . (This command adds all the files to the upload)
4. git commit -m "MESSAGE" (message is necessary, always give information what you have done)
5. git push (push the upload to all)

To get the newest files from git(always navigate to the project folder):
* git pull

## HTML

### Semantics

HTML5 provides us with lots of semantic elements aimed to describe precisely the content. Make sure you benefit from its rich vocabulary.

```html
<!-- bad -->
<div id=main>
  <div class=article>
    <div class=header>
      <h1>Blog post</h1>
      <p>Published: <span>21st Feb, 2015</span></p>
    </div>
    <p>…</p>
  </div>
</div>

<!-- good -->
<main>
  <article>
    <header>
      <h1>Blog post</h1>
      <p>Published: <time datetime=2015-02-21>21st Feb, 2015</time></p>
    </header>
    <p>…</p>
  </article>
</main>


## CSS

All CSS must be in the styles/styles.css file

