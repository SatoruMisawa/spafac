    <nav class="party_search">

      <form method="get" action="{{action('SearchController@searchindex')}}">
        <div>
        	<input type="text" name="area" value="" placeholder = "エリア"></input>
        </div>
        <div><input type="text" placeholder="チェックイン・アウト" list="checkin-out"><i>▼</i>
          <datalist id="space_usage" name="space_usage_id">
            <option value="1" >チェックイン</option>
            <option value="2">チェックアウト</option>
          </datalist>
      </div>
      

      <div><input type="text" placeholder="宿泊人数" list="men" name="men"><i>▼</i>

        <datalist id="men"  name="men">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">~~5</option>
          <option value="6">~10</option>
          <option value="7">~20</option>
        </datalist>
      </div>


        <input type="submit" value="検索">
    </form>


    </nav>
