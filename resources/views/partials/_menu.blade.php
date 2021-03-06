<div class="ui secondary  stackable huge pointing menu">
    <a class="active item" href="{{ route('home') }}">
        DevWUs
    </a>
    <div class="right menu">
        <a class="item" href="{{ route('home') }}">
            Articles
        </a>
        <div class="ui dropdown item">
            Apropos <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item  animate__animated animate__flipInX">DevWus</a>
                <a class="item">Fofe</a>
                <a class="item">Yaton</a>
            </div>
        </div>
        <a class="ui item" href="{{ route("contact") }}">
            Contact
        </a>
        @auth()
            <a class="ui item">
                Logout
            </a>
        @endauth
        @guest()
            <a class="ui item login">
                Login
            </a>
        @endguest
    </div>
</div>


<div class="ui two column stackable centered grid" style="padding-top: 100px;margin-bottom: 20px">
    <div class="column animate__animated animate__fadeInDown" >
        <div class="ui fluid action left icon input">
            <i class="inverted circular search link icon"></i>
            <input type="text" placeholder="Search...">
            <select class="ui compact selection dropdown">
                <option value="all">All</option>
                <option selected="" value="articles">Articles</option>
                <option value="products">Products</option>
            </select>
            <div class="ui button">Search</div>
        </div>
    </div>
</div>


