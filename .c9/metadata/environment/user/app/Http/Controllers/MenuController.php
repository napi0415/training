{"filter":false,"title":"MenuController.php","tooltip":"/user/app/Http/Controllers/MenuController.php","undoManager":{"mark":44,"position":42,"stack":[[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["p"],"id":2},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["u"]}],[{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"remove","lines":["u"],"id":3},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":["p"]},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"]},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["p"],"id":4},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["u"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["v"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["l"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["i"]}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"remove","lines":["i"],"id":5},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"remove","lines":["l"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":["v"]}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["b"],"id":6},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["l"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["i"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["c"]}],[{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":[" "],"id":7},{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["f"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["i"]}],[{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"remove","lines":["i"],"id":8}],[{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["u"],"id":9},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":8,"column":14},"end":{"row":8,"column":16},"action":"insert","lines":["[]"],"id":10}],[{"start":{"row":8,"column":14},"end":{"row":8,"column":16},"action":"remove","lines":["[]"],"id":12}],[{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["c"],"id":13},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["t"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["i"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["o"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":[" "],"id":14},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":["i"]},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"insert","lines":["n"]},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["d"]},{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["e"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["c"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["c"],"id":15}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["x"],"id":16},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["8"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["9"]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["9"],"id":17},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["8"]}],[{"start":{"row":8,"column":25},"end":{"row":12,"column":52},"action":"insert","lines":["function(Request $request) {","      $ymd = $request->input('ymd');","               $training = traininguser::Join('trainingmenumngs as trm', 'users.userid', 'trm.userid')->Join('trainingmenumsts as trs', 'trm.menuid' ,'trs.menuid')->where('trm.date',$ymd)->get();","","    return view('menu')->with('training',$training);"],"id":18}],[{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"remove","lines":["n"],"id":19},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"remove","lines":["o"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"remove","lines":["i"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["t"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["c"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"remove","lines":["n"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["u"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["f"]}],[{"start":{"row":12,"column":52},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"insert","lines":["}"]}],[{"start":{"row":10,"column":74},"end":{"row":10,"column":75},"action":"insert","lines":["t"],"id":21},{"start":{"row":10,"column":75},"end":{"row":10,"column":76},"action":"insert","lines":["r"]},{"start":{"row":10,"column":76},"end":{"row":10,"column":77},"action":"insert","lines":["a"]},{"start":{"row":10,"column":77},"end":{"row":10,"column":78},"action":"insert","lines":["i"]},{"start":{"row":10,"column":78},"end":{"row":10,"column":79},"action":"insert","lines":["n"]},{"start":{"row":10,"column":79},"end":{"row":10,"column":80},"action":"insert","lines":["i"]},{"start":{"row":10,"column":80},"end":{"row":10,"column":81},"action":"insert","lines":["n"]},{"start":{"row":10,"column":81},"end":{"row":10,"column":82},"action":"insert","lines":["g"]}],[{"start":{"row":8,"column":34},"end":{"row":8,"column":42},"action":"remove","lines":["$request"],"id":22},{"start":{"row":8,"column":33},"end":{"row":8,"column":34},"action":"remove","lines":[" "]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"remove","lines":["t"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"remove","lines":["s"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"remove","lines":["e"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["u"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["q"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"remove","lines":["e"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["R"]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["$"],"id":23},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["i"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["f"]}],[{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["f"],"id":24}],[{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["d"],"id":25}],[{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["d"],"id":26},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"remove","lines":["i"]}],[{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["y"],"id":27},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["m"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["d"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"remove","lines":["e"],"id":28}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":36},"action":"remove","lines":["      $ymd = $request->input('ymd');"],"id":29},{"start":{"row":8,"column":33},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":30},"action":"remove","lines":["$ymd"],"id":30}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":42},"action":"insert","lines":["Request $request"],"id":31}],[{"start":{"row":8,"column":45},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":32},{"start":{"row":9,"column":0},"end":{"row":9,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":34},"action":"insert","lines":["$data = $request->message;"],"id":33}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":13},"action":"remove","lines":["$data"],"id":34}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"insert","lines":["$"],"id":35},{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"insert","lines":["y"]},{"start":{"row":9,"column":10},"end":{"row":9,"column":11},"action":"insert","lines":["m"]},{"start":{"row":9,"column":11},"end":{"row":9,"column":12},"action":"insert","lines":["d"]}],[{"start":{"row":9,"column":25},"end":{"row":9,"column":32},"action":"remove","lines":["message"],"id":38}],[{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"insert","lines":["y"],"id":39},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"insert","lines":["m"]},{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"insert","lines":["d"]}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":20},"action":"insert","lines":["use App\\Models\\user;"],"id":40}],[{"start":{"row":3,"column":15},"end":{"row":3,"column":16},"action":"insert","lines":["t"],"id":41},{"start":{"row":3,"column":16},"end":{"row":3,"column":17},"action":"insert","lines":["r"]},{"start":{"row":3,"column":17},"end":{"row":3,"column":18},"action":"insert","lines":["a"]},{"start":{"row":3,"column":18},"end":{"row":3,"column":19},"action":"insert","lines":["i"]},{"start":{"row":3,"column":19},"end":{"row":3,"column":20},"action":"insert","lines":["n"]},{"start":{"row":3,"column":20},"end":{"row":3,"column":21},"action":"insert","lines":["i"]},{"start":{"row":3,"column":21},"end":{"row":3,"column":22},"action":"insert","lines":["n"]},{"start":{"row":3,"column":22},"end":{"row":3,"column":23},"action":"insert","lines":["g"]}],[{"start":{"row":3,"column":27},"end":{"row":3,"column":28},"action":"insert","lines":["s"],"id":42}],[{"start":{"row":3,"column":27},"end":{"row":3,"column":28},"action":"remove","lines":["s"],"id":43}],[{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"remove","lines":["d"],"id":73},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"remove","lines":["m"]},{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"remove","lines":["y"]},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"remove","lines":[">"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["-"]}],[{"start":{"row":9,"column":23},"end":{"row":9,"column":40},"action":"insert","lines":["->input('value');"],"id":74}],[{"start":{"row":9,"column":32},"end":{"row":9,"column":37},"action":"remove","lines":["value"],"id":75}],[{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"insert","lines":["y"],"id":76},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"insert","lines":["m"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"insert","lines":["d"]}],[{"start":{"row":3,"column":27},"end":{"row":3,"column":28},"action":"insert","lines":["s"],"id":80}],[{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"insert","lines":["s"],"id":80}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":27},"end":{"row":8,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1619673906261,"hash":"87fd30c3bab88b325c1fd08f16a72f2ce3525096"}