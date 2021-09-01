library('ggplot2')
dekalb <- sf::st_read('tl_2020_13089_roads.shp')
fulton <- sf::st_read('tl_2020_13121_roads.shp')
ggplot()+
  geom_sf(data = dekalb, color='grey')+
  geom_sf(data=fulton, color='grey')+
  coord_sf(xlim=c(-84.5, -84.2), ylim=c(33.7,33.85)) +
  theme_void() + # Empty theme without axis lines and texts
  theme(
    panel.background = element_rect(fill = "transparent", colour = NA),
    plot.background = element_rect(fill = "transparent", colour = NA),
    legend.background = element_rect(fill = "transparent", colour = NA),
    legend.box.background = element_rect(fill = "transparent", colour = NA)
  )
  
  
