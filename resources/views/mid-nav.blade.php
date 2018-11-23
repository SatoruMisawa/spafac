    <nav class="party_search">

      <form method="get" action="{{action('SearchController@searchindex')}}">
        <div>
        	<input type="text" name="area" value="" placeholder = "エリア"></input>
        </div>
        <div><input type="text" placeholder="目的" list="space_usage"><i>▼</i>
          <datalist id="space_usage" name="space_usage_id">
            <option value="1" >物販</option>
            <option value="2">飲食・パーティー</option>
            <option value="3">催事・展示会</option>
            <option value="4">イベントプロモーション・広告</option>
            <option value="5">オフィス・会議</option>
            <option value="6">宿泊・民泊</option>
            <option value="7">結婚式・お祝いシーン</option>
            <option value="8">演奏</option>
            <option value="9">ロケ撮影・写真・動画</option>
            <option value="10">駐車場</option>
            <option value="11">スポーツ</option>
            <option value="12">その他</option>
          </datalist>
      </div>
      

      <div><input type="text" placeholder="人数" list="men" name="men"><i>▼</i>

        <datalist id="men"  name="men">
          <option value="10">~10</option>
          <option value="20">~20</option>
          <option value="30">~30</option>
          <option value="40">~40</option>
          <option value="50">~50</option>
          <option value="60">~75</option>
          <option value="100">~100</option>
          <option value="150">~150</option>
          <option value="200">~200</option>
          <option value="300">~300</option>
          <option value="400">~400</option>
          <option value="500">~500</option>
          <option value="1000">~1000</option>
        </datalist>
      </div>


        <input type="submit" value="検索">
    </form>


    </nav>
