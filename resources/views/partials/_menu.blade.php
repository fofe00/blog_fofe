<div class="ui secondary  huge pointing menu">
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
                <a class="item">DevWus</a>
                <a class="item">Fofe</a>
                <a class="item">Yaton</a>
            </div>
        </div>
        <a class="ui item" href="{{ route("contact") }}">
            Contact
        </a>
        <a class="ui item">
            Logout
        </a>
    </div>
</div>


<div class="ui two column centered grid" style="padding-top: 100px">
    <div class="column">
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


