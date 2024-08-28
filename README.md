#Point 2 (Refactoring)
  * Refactor index action: 
        pass posts directly on view instead of variable creation and use pagination for better performance
  * Refactor store action: 
        create FormRequest for seperate validation logic,
        And use mass assignment to create post with validated data if validation passes,
        And flash message to notify that create proccess success

#Point 3 (Optimizing)
  * Use eager loading to preload relations, and only select columns we need.

#Point 4 (SQL)
  * reterive posts with max number of comments, two statemnt on for retervie all posts second to get one post only
