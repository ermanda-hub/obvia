var myTree = new Tree({
    id: 'tree',
    valueField: "key",
    labelField: "title",
    childrenField: "children",
    dataProvider:new ArrayEx([
        {title: "Node 1", key: "1"},
        {title: "Folder 2", key: "2", children: new ArrayEx([
          {title: "Node 2.1", key: "3", myOwnAttr: "abc"},
          {title: "Node 2.2", key: "4"}
        ])}
      ]),
    expandIcon: "fa-chevron-circle-right",
    collapseIcon: "fa-chevron-circle-down",
    click : function(e){console.log("From ClickAction");}
});

myTree.on('creationComplete', function () {
  myTree.on('click',function (){
   // alert("test");
  });
});
$('#root').append(myTree.render());