var tabs = document.querySelectorAll(".tabs_wrap ul li");
var date18s = document.querySelectorAll(".date18");
var date19s = document.querySelectorAll(".date19");
var date20s = document.querySelectorAll(".date20");
var all = document.querySelectorAll(".item_wrap");

tabs.forEach((tab)=>{
	tab.addEventListener("click", ()=>{
		tabs.forEach((tab)=>{
			tab.classList.remove("active");
		})
		tab.classList.add("active");
		var tabval = tab.getAttribute("data-tabs");

		all.forEach((item)=>{
			item.style.display = "none";
		})

		if(tabval == "date18"){
			date18s.forEach((date18)=>{
				date18.style.display = "block";
			})
		}
		else if(tabval == "date19"){
			date19s.forEach((date19)=>{
				date19.style.display = "block";
			})
		}
		else if(tabval == "date20"){
			date20s.forEach((date20)=>{
				date20.style.display = "block";
			})
		}
		else{
			all.forEach((item)=>{
				item.style.display = "block";
			})
		}

	})
})
