---
layout: page
title: Blog
---

<ul>
  {% for post in site.posts %}
    <li>
      <h4><a href="{{ post.url }}">{{ post.title }}</a></h4>
      <h5>Published on {{ post.date | date_to_string }}</h5>
      <p>{{ post.excerpt }}</p>
    </li>
  {% endfor %}
</ul>