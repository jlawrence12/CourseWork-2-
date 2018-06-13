
            //Create recommender object - it loads its state from local storage
            var recommender = new Recommender();
            
            //Display recommendation
            window.onload = showRecommendation;
            
            //Searches for products in database
            function search(){
                //Extract the search text
                var searchText = document.getElementById("search").value;
                
                //Add the search keyword to the recommender
                recommender.addKeyword(searchText);
                showRecommendation();
                
            }
            
            //Display the recommendation in the document
            function showRecommendation(){
                document.getElementById("RecomendationDiv").innerHTML = recommender.getTopKeyword();
            }
