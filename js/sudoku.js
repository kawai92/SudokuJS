/**
 * Created by YanningXue on 5/6/15.
 */

function Sudoku(index)
{
    this.puzzle = puzzles[index];
    this.answer = answers[index];
    //console.log(puzzle);
    this.sudokuTable = document.getElementById("gameform");
    this.tableButton = this.sudokuTable.getElementsByTagName("button");

    this.input = $("#cellinput");
    this.input.hide();
    for(var i=0; i<81; i++) { //the main loop

        var buttonID = this.tableButton[i].id;

        var row = buttonID.charAt(0);
        var col = buttonID.charAt(2);


        if (row == 2 || row == 5) {
            this.tableButton[i].parentNode.className = "rowborder";
        }

        if (col == 2 || col == 5) {
            this.tableButton[i].parentNode.className = "colborder";

            if (row == 2 || row == 5 ) {
                this.tableButton[i].parentNode.className = "rowcolborder";
            }

        }
        var value = this.puzzle[row][col];
        var ans = this.answer[row][col];
        //console.log(value);
        //console.log(ans);
        if(value == ans){
            //console.log(value);
            this.tableButton[i].className = "isDefault";
            this.tableButton[i].innerText = value;
        }
    }


}
Sudoku.prototype.cellClicked = function(item) {
    event.preventDefault();
    if(item.className != "isDefault") {
        //console.log(item.innerText);
        this.cell = item;
        //var row = parseInt(this.cell.id.charAt(0));
        //var col = parseInt(this.cell.id.charAt(2));
        //window.location.href="./cellClicked.php?r="+row+"&c="+col;
        //this.tableButton[row*9+col].innerText = this.answer[row][col];
        var id = "#" + this.cell.id;
        var position = $(id).position();
        var top = position.top - 40;
        var left = position.left - 40;
        this.input = $("#cellinput");
        this.input.css(
            {
                position: 'absolute',
                backgroundColor: 'white',
                top: top,
                left: left
            }
        );
        //$("#inputLoc").Text = "Insert value into cell [" + row + " , "+col+" + ]";
        this.input.fadeIn(100);
    }
}

Sudoku.prototype.enterValue = function(){
    var value = $("#val").val();
    this.cell.className = "hassth";
    this.cell.innerText = value;
    this.input.hide();
    this.checkFull();
}
Sudoku.prototype.enterClue = function(){
    var value = $("#val").val();
    if(this.cell.className == "hassth"){
        this.cell.className = "isClue";
        this.cell.innerText = value + "\u00a0";
    }else {
        if (this.cell.innerText.indexOf(value) == -1) {
            this.cell.innerText += value + "\u00a0";
        }
    }
    this.input.hide();
}
Sudoku.prototype.cancelPop = function(){
    this.input.hide();
}
Sudoku.prototype.giveUp = function(){
    for(var i=0; i<81; i++) { //the main loop
        var buttonID = this.tableButton[i].id;
        var row = buttonID.charAt(0);
        var col = buttonID.charAt(2);
        var ans = this.answer[row][col];
        this.tableButton[i].className = "isDefault";
        this.tableButton[i].innerText = ans;
    }
    this.checkFull();
}

Sudoku.prototype.checkFull = function(){
    var flag = true;
    for(var i=0; i<81; i++) { //the main loop
        if(this.tableButton[i].className == "isDefault" ||
                this.tableButton[i].className == "hassth"){
        }else{
            flag = false;
        }
    }
    if(flag){
        this.checkWin();
    }
}
Sudoku.prototype.checkWin = function(){
    var flag = true;
    for(var i=0; i<81; i++) { //the main loop
        var buttonID = this.tableButton[i].id;
        var row = buttonID.charAt(0);
        var col = buttonID.charAt(2);
        var ans = this.answer[row][col];
        if(this.tableButton[i].innerText != ans){
            this.tableButton[i].parentNode.className = "isWrong";
            flag = false;
        }
    }
    if(!flag){
        return;
    }else{
        for(var i=0; i<81; i++) { //the main loop
            this.tableButton[i].className = "isDefault";
            this.tableButton[i].parentNode.className = "isRight";
        }
    }
}

