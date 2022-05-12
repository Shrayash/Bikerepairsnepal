@extends('layouts.app')

@section('content')
<main>
    <!-- Start Blog -->
    <section id="glocal-blog" class="glocal-blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="glocal-blog-area">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="glocal-blog-left">
                                    <!-- start single item -->
                                    <article class="glocal-blog-item">
                                        <img class="cover" src="{{ asset('assets') }}/images/first_bg.jpg" width="100%" height="60%" alt="blgo">
                                        <div class="glocal-blog-item-content">

                                            <h1 class="glocal-blog-item-title">Seeing the big picture of information and information management</h1>
                                            <ul class="glocal-blog-meta">
                                                <li>BY: SARAFA GAZAR </li>
                                                <li>Updated on Thursday, 19 October 2021</li>
                                            </ul>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                                            <blockquote>
                                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                                            </blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                            <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                                        </div>
                                        {{-- <!-- Start Blog Post Tag -->
                                        <div class="glocal-blog-tag">
                                            <ul class="glocal-blog-tag-nav">
                                                <li><h3><span class="fa fa-tag"></span>Article Tags:</h3></li>
                                                <li><a href="#">Web Design,</a></li>
                                                <li><a href="#">Graphic Design,</a></li>
                                                <li><a href="#">E-commerces</a></li>
                                            </ul>
                                        </div>
                                        <!-- End Blog Post Tag --> --}}

                                        <!-- Start related post -->
                                        <div class="glocal-related-post">
                                            <h2 class="glocal-related-post-title">You may also like</h2>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <article class="glocal-blog-item">
                                                        <a href="#"> <img class="cover" src="{{ asset('assets') }}/images/first_bg.jpg" width="100%" height="60%" alt="blgo"></a>
                                                        <div class="glocal-blog-item-content">

                                                            <h1 class="glocal-blog-item-title"><a href="#">Seeing the big picture of information and information management</a></h1>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                            <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-md-4">
                                                    <article class="glocal-blog-item">
                                                        <a href="#"> <img class="cover" src="{{ asset('assets') }}/images/first_bg.jpg" width="100%" height="60%" alt="blgo"></a>
                                                        <div class="glocal-blog-item-content">

                                                            <h1 class="glocal-blog-item-title"><a href="#">Seeing the big picture of information and information management</a></h1>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                            <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-md-4">
                                                    <article class="glocal-blog-item">
                                                        <a href="#"> <img class="cover" src="{{ asset('assets') }}/images/first_bg.jpg" width="100%" height="60%" alt="blgo"></a>
                                                        <div class="glocal-blog-item-content">

                                                            <h1 class="glocal-blog-item-title"><a href="#">Seeing the big picture of information and information management</a></h1>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                            <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a></i></a>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End related post -->

                                        <!-- start blog comment -->
                                        <div class="glocal-comments-area">
                                          <h2>5 Comments</h2>
                                          <div class="comments">
                                            <ul class="commentlist">
                                              <li>
                                                <div class="media">
                                                  <div class="media-left">
                                                    <img src="{{ asset('assets') }}/images/person.jpg" class="media-object news-img">
                                                  </div>
                                                  <div class="media-body">
                                                   <h4 class="author-name">David Muller</h4>
                                                   <span class="comments-date"> Posted on 12th Oct, 2021</span>
                                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                                   <a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                                  </div>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="media">
                                                  <div class="media-left">
                                                    <img src="{{ asset('assets') }}/images/person.jpg" class="media-object news-img">
                                                  </div>
                                                  <div class="media-body">
                                                   <h4 class="author-name">John Doe</h4>
                                                   <span class="comments-date"> Posted on 12th Oct, 2021</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                                   <a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                                  </div>
                                                </div>
                                              </li>
                                              <ul class="children">
                                                <li class="author-comments">
                                                  <div class="media">
                                                    <div class="media-left">
                                                        <img src="{{ asset('assets') }}/images/person.jpg" class="media-object news-img">
                                                    </div>
                                                    <div class="media-body">
                                                     <h4 class="author-name">Admin</h4>
                                                     <span class="comments-date"> Posted on 12th Oct, 2021</span>
                                                     <span class="author-tag">Author</span>
                                                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                                      <a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                                    </div>
                                                  </div>
                                                </li>
                                                <ul class="children">
                                                  <li>
                                                    <div class="media">
                                                      <div class="media-left">
                                                        <img src="{{ asset('assets') }}/images/person.jpg" class="media-object news-img">
                                                      </div>
                                                      <div class="media-body">
                                                       <h4 class="author-name">David Muller</h4>
                                                       <span class="comments-date"> Posted on 12th Oct, 2021</span>
                                                       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                                           <a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                                      </div>
                                                    </div>
                                                  </li>
                                                </ul>
                                              </ul>
                                              <li>
                                                <div class="media">
                                                  <div class="media-left">
                                                    <img src="{{ asset('assets') }}/images/person.jpg" class="media-object news-img">
                                                  </div>
                                                  <div class="media-body">
                                                   <h4 class="author-name">Jhon Doe</h4>
                                                   <span class="comments-date"> Posted on 12th Oct, 2021</span>
                                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                                   <a class="reply-btn" href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                                  </div>
                                                </div>
                                              </li>
                                            </ul>
                                            <!-- comments pagination -->
                                            <nav>
                                              <ul class="pagination comments-pagination">
                                                <li>
                                                  <a aria-label="Previous" href="#">
                                                    <span class="fa fa-long-arrow-left"></span>
                                                  </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                  <a aria-label="Next" href="#">
                                                    <span class="fa fa-long-arrow-right"></span>
                                                  </a>
                                                </li>
                                              </ul>
                                            </nav>
                                          </div>
                                        </div>
                                        <!-- end blog comment -->

                                        <!-- start respond form -->
                                        <div id="respond">
                                          <h2 class="reply-title">Leave a reply</h2>
                                          <form id="commentform">
                                            <p class="comment-notes">
                                              Your email address will not be published. Required fields are marked <span class="required">*</span>
                                            </p>
                                            <p class="comment-form-author">
                                              <label for="author">Name <span class="required">*</span></label>
                                              <input type="text" required="required" name="author">
                                            </p>
                                            <p class="comment-form-email">
                                              <label for="email">Email <span class="required">*</span></label>
                                              <input type="email" required="required" aria-required="true" name="email">
                                            </p>
                                            <p class="comment-form-url">
                                              <label for="url">Website</label>
                                              <input type="url" value="" name="url">
                                            </p>
                                            <p class="comment-form-comment">
                                              <label for="comment">Comment</label>
                                              <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                                            </p>
                                            {{-- <p class="form-allowed-tags">
                                              You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>
                                            </p> --}}
                                            <p class="form-submit">
                                              <input type="submit" value="Post Comment" class="button button1" name="submit">
                                            </p>
                                          </form>
                                        </div>
                                        <!-- end respond form -->

                                    </article>
                                    <!-- End single item -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="glocal-blog-sidebar">

                                    <!-- start Single Widget -->
                                    <div class="glocal-sidebar-widget">
                                        <h2 class="glocal-sidebar-widget-title">Featured News</h2>
                                        <div class="glocal-popular-content-widget">
                                            <div class="media">

                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5" style="padding: 0px 0px;">
                                                        <a href="#" class="glocal-popular-post-img"><img
                                                                class="cover"
                                                                src="{{ asset('assets') }}/images/news.jpg"
                                                                width="400px;" height="80px" alt="blgo image"></a>
                                                    </div>
                                                    <div class="col-md-7" style="padding: 0px 8px;">
                                                        <div class="media-body">
                                                            <b>Lorem ipsum dolor sit amet </b>
                                                            <p class="limitline">Lorem
                                                                ipsum dolor sit amet,
                                                                consectetuer adipiscing elit.
                                                                Aenean commodo ligula eget
                                                                dolor. Aenean massa. Cum sociis
                                                                natoque penatibus et magnis dis.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div><br>
                                            </div>
                                        </div>
                                        <!-- End single widget -->

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->

</main>
@endsection
