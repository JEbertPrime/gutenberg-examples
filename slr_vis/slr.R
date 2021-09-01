library('sf')
library('rgdal')
library('ggplot2')
library('maps')
dsn <-'GA_slr_final_dist.gdb'
dsn<-sf::st_layers(dsn=dsn)
states <- sf::st_read('cb_2018_us_state_500k.shp')
savannah_roads <- sf::st_read('tl_2020_13051_roads.shp')
bryan_roads <- sf::st_read('tl_2020_13029_roads.shp')
layer_0 <- sf::st_make_valid(sf::st_read(dsn=dsn, layer='GA_slr_0ft'))
layer_1 <-  sf::st_make_valid(sf::st_read(dsn=dsn, layer='GA_slr_1ft'))
layer_2 <-  sf::st_make_valid(sf::st_read(dsn=dsn, layer='GA_slr_2ft'))
layer_3 <-  sf::st_make_valid(sf::st_read(dsn=dsn, layer='GA_slr_3ft'))
layer_4 <-  sf::st_make_valid(sf::st_read(dsn=dsn, layer='GA_slr_4ft'))
layer_5 <-  sf::st_make_valid(sf::st_read(dsn=dsn, layer='GA_slr_5ft'))
layer_6 <-  sf::st_make_valid(sf::st_read(dsn=dsn, layer='GA_slr_6ft'))

cropped_0 <- sf::st_crop(layer_0, c(xmax=-80.7, xmin=-81.3, ymin=31.5, ymax=32.033)) 
cropped_1 <- sf::st_crop(layer_1, c(xmax=-80.7, xmin=-81.3, ymin=31.5, ymax=32.033)) 
cropped_2 <- sf::st_crop(layer_2, c(xmax=-80.7, xmin=-81.3, ymin=31.5, ymax=32.033)) 
cropped_3 <- sf::st_crop(layer_3, c(xmax=-80.7, xmin=-81.3, ymin=31.5, ymax=32.033)) 
cropped_4 <- sf::st_crop(layer_4, c(xmax=-80.7, xmin=-81.3, ymin=31.5, ymax=32.033)) 
cropped_5 <- sf::st_crop(layer_5, c(xmax=-80.7, xmin=-81.3, ymin=31.5, ymax=32.033)) 
cropped_6 <- sf::st_crop(layer_6, c(xmax=-80.7, xmin=-81.3, ymin=31.5, ymax=32.033)) 
ggplot(cropped_4)a
theme_set(theme_minimal())
georgia <- map_data('state', 'georgia')
layers <- list(layer_0, layer_1, layer_2, layer_3, layer_4, layer_5, layer_6)
 i <- 0
for(layer in layers){
  print(layer)
  ggplot() +
    geom_sf(data=states,fill="#152238", colour = "white")+
    geom_sf(data=savannah_roads,fill="#152238", colour = "white")+
    geom_sf(data=bryan_roads,fill="#152238", colour = "white")+
    geom_sf( data=layer,fill=alpha('#227c9d',1), color=NA) +
    coord_sf(xlim=c(-81.34, -80.7), ylim=c(31.8,32.1)) +
    theme_void() + # Empty theme without axis lines and texts
    theme(
      panel.background = element_rect(fill = "transparent", colour = NA),
      plot.background = element_rect(fill = "transparent", colour = NA),
      legend.background = element_rect(fill = "transparent", colour = NA),
      legend.box.background = element_rect(fill = "transparent", colour = NA)
    )
  ggsave(paste('layer_', i, '.png', sep=''), bg='transparent', width=700, units='px')
  i<- i + 1
}

 ggplot() +
   geom_sf(data=states,fill="#152238", colour = "white")+
   geom_sf(data=savannah_roads,fill="#152238", colour = "white")+
   geom_sf(data=bryan_roads,fill="#152238", colour = "white")+
   
   geom_sf( data=layer_1,fill=alpha('#227c9d',1), color=NA) +
   coord_sf(xlim=c(-81.34, -80.7), ylim=c(31.8,32.1)) +
   theme_void() + # Empty theme without axis lines and texts
   theme(
     panel.background = element_rect(fill = "transparent", colour = NA),
     plot.background = element_rect(fill = "transparent", colour = NA),
     legend.background = element_rect(fill = "transparent", colour = NA),
     legend.box.background = element_rect(fill = "transparent", colour = NA)
   )
 ggplot() +
   geom_sf(data=states,fill="#152238", colour = "white")+
   geom_sf(data=savannah_roads,fill="#152238", colour = "white")+
   geom_sf(data=bryan_roads,fill="#152238", colour = "white")+
   geom_sf( data=layer_1,fill=alpha('#227c9d',1), color=NA) +
   coord_sf(xlim=c(-81.34, -80.7), ylim=c(31.8,32.1)) +
   theme_void() + # Empty theme without axis lines and texts
   theme(
     panel.background = element_rect(fill = "transparent", colour = NA),
     plot.background = element_rect(fill = "transparent", colour = NA),
     legend.background = element_rect(fill = "transparent", colour = NA),
     legend.box.background = element_rect(fill = "transparent", colour = NA)
   )
 ggsave(paste('layer_', 1, '.png', sep=''), bg='transparent', width=10, units='in', dpi='screen')
 