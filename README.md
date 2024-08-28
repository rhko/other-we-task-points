## Point 2 (Refactoring)
* Refactor index action: <br />
> pass posts directly on view instead of variable creation
>
> use pagination for better performance

  * Refactor store action: <br />
> create FormRequest for seperate validation logic
> 
> use mass assignment to create post with validated data
> 
>  flash message to notify that create proccess success
> 
>  note: If we have complex busines logic we can seperate it outside controller
>  like sevice layer but here no need to do it.

## Point 3 (Optimizing)
> Use eager loading to preload relations, and only select columns we need.

## Point 4 (SQL)
> reterive posts with max number of comments:
> 
> two statemnt one for retervie all posts second to get one post only
