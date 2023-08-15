<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="210" src="images/carlogo2s.jpg" alt="#" /></a>
                    </div>
                    <div class="information_f">
                        <p><strong>ADDRESS:</strong> Fulbari Gate, Khulna</p>
                        <p><strong>TELEPHONE:</strong> 01234567890</p>
                        <p><strong>EMAIL:</strong> admin@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Menu</h3>
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about')}}">About</a></li>
                                        <li><a href="{{url('testimonial')}}">Testimonial</a></li>
                                        <li><a href="{{url('blog')}}">Blog</a></li>
                                        <li><a href="{{url('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Account</h3>
                                    <ul>

                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        <li><a href="{{url('show_cart')}}">Cart</a></li>
                                        <li><a href="{{url('show_order')}}">Order</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
