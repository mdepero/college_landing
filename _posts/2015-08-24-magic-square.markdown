---
layout:     post
title:      "Magic Squares"
subtitle:   "A magic square generator with JavaScript"
date:       2015-08-24 12:00:00
author:     "Matt DePero"
header-img: "img/post-bg-square.jpg"
---

<h2>What is a Magic Square?</h2>
<p>
A <a href="https://en.wikipedia.org/wiki/Magic_square" target="_blank">magic square</a> is a grid of distinct numbers where each row, column, and diagonal add up to the same constant value. The form below uses JavaScript to create any sized magic square (note: too large a number can be very slow to load).
</p>
<h2>Magic Square Generator</h2>

<p class="square">
	Size: <input type="text" id="size" size="2">
		<button onclick="javascript:generate()">Generate</button>
		<div id="error"></div>
		<h2 id="sum"></h2>
		<div id="status"></div>
</p>
<table id="square" class="square-table">
</table>


<style>
			td{
				border: 1px solid black;
				padding: 1px;
				text-align:center;
				vertical-align: middle;
				font-size: .8em;
			}
			.sum{
				background-color: #cfc;
			}
			.square{
				text-align: center;
			}
			.square-table{
				overflow: visible !important;
			}
</style>
<script type="text/javascript">
			
			var tbl;
			
			function createGrid( size ) { 
				
				tbl = document.getElementById('square');
				
				for(var i = tbl.rows.length - 1; i >= 0 ; i--){
					tbl.deleteRow(i);
				}
				
				
				for(var i = 0; i < size; i++){
					
					var row = tbl.insertRow(tbl.rows.length);
					
					for (var j = 0; j < size; j++) {  
						
						row.insertCell(j);    
					}
				}
			}
			
			
			function buildSquare( size ){
				
				// start the iterator in the cell one down and one left of start position
				var x = Math.floor(size/2.0);
				var y = size-1;
				var bigSize = size*size;
				for(var i = 1; i <= bigSize; i++){
					
					x++;
					y++;
					
					if(x>size)
						x = 1;
					if(y>size)
						y = 1;
					
					
					if( cellHasValue(size,x,y) ){
						x--;
						y = y-2;
						
						if(x<1)
							x = size;
						if(y<1)
							y += 1*size;
						
					}
					
					setCell(size, x, y, i);
				}
			}
			
			function addSums( size ){
				var sum = 0;
				for(var i = 0;i < tbl.rows[0].cells.length; i++){
					sum += 1*tbl.rows[0].cells[i].innerHTML;
				}
				
				document.getElementById('sum').innerHTML = "All columns, rows, and diagonals add up to: "+sum;
				//for(var i = 0;i < tbl.rows.length;i++){
				//	var cell = tbl.rows[i].insertCell(tbl.rows[i].cells.length);
				//	cell.innerHTML = "="+sum;
				//}
				//
				//tbl.insertRow(tbl.rows.length);
				//for(var i = 0;i < tbl.rows[0].cells.length;i++){
				//	var cell = tbl.rows[tbl.rows.length-1].insertCell(i);
				//	cell.innerHTML = "="+sum;
				//}
			}
			
			function cellHasValue( size, x, y ){
				
				if(tbl.rows[size-y].cells[x-1].innerHTML == "")
					return false;
				else
					return true;
			}
			
			function setCell( size, x, y, value){
				
				tbl.rows[size-y].cells[x-1].innerHTML = value;
			}
			
			function generate(){
				
				var size = document.getElementById('size').value;
				document.getElementById('error').innerHTML = "";
				if(size<1){
					document.getElementById('error').innerHTML = "Size cannot be negative or 0";
					return;
				}
				if(size%2 != 1){
					document.getElementById('error').innerHTML = "Size must be odd and an integer";
					return;
				}
				
				createGrid( size );
				
				buildSquare( size );
				
				addSums( size );
			}
</script>
