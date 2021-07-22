library('ggplot2')
roads <- sf::st_read('roads.json')
plot(roads)
