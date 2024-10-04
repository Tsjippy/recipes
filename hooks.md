# FILTERS
- apply_filters('sim-empty-taxonomy', 'There are no recipes submitted yet.', 'recipe');
- apply_filters('sim-single-template-bottom', '', 'recipe');
- apply_filters('sim-empty-taxonomy', "There are no ".get_queried_object()->slug." recipies yet.", 'recipe');

# Actions
- 