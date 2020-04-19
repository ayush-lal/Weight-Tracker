# Weight Tracker
Simple Weight Tracker Web App that can write to a Database your daily weight and displays your stats based on each month.

>![Demo of Application](readme_files/showcase.gif)

### Database Configuration
```sql
CREATE TABLE `WeightTracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person` varchar(10) NOT NULL DEFAULT '',
  `kg` float DEFAULT NULL,
  `weight_date` varchar(10) NOT NULL DEFAULT '',
  `date_month` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=latin1;
```

### Author/ Creator

**Ayush Lal** <br>
_// If you have any queries please feel free to get in touch -_
[Portfolio Website](http://www.ayushlal.com.au) |
[GitHub](https://github.com/ayush-lal)
