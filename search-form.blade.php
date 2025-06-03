<form action="{{url('polices')}}" method="GET">
    <div id="search_sec">
        <button type="submit" id="serch_btn">
            <i class="fas fa-search"></i>
        </button>
        <input type="search" name="search" value="{{ request('search') }}" placeholder="{{translateText('پلټنه وکړئ....')}}">
    </div>
</form>
