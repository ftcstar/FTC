package dataProvider;

import java.util.ArrayList;

public class DataProvider {
	
	String alt,src,dataType,dataImage,dataTrackID,dataDescription,dataVideoID,dataVideoogv,dataVideowebm,dataVideomp4;
	ArrayList<WebDataProvider> list;
	public ArrayList<WebDataProvider> getObjects() {
		return getList();
	}
	private ArrayList<DataProvider> getList() {
		list = new ArrayList<DataProvider>();
		String altString={Preview Image 1;Preview Image 2;Youtube Video;Vimeo Video;Preview Image 4;Html5 Video;Preview Image 5;Wistia Video;Preview Image 6;Sound Cloud Track;Preview Image 7;Preview Image 8;Preview Image 9;Preview Image 10;Preview Image 11};
		String[] altArray = altString.split(";");
		String srcString={images/thumbs/thumb1.jpg;images/thumbs/thumb2.jpg;0;images/thumbs/thumb3.jpg;http://i.vimeocdn.com/video/447294219_200x150.jpg;images/thumbs/thumb4.jpg;0;images/thumbs/thumb1.jpg;images/thumbs/wistia_video.jpg;images/thumbs/thumb2.jpg;images/thumbs/sound_cloud.jpg;images/thumbs/thumb3.jpg;images/thumbs/thumb4.jpg;images/thumbs/thumb1.jpg;images/thumbs/thumb2.jpg;images/thumbs/thumb3.jpg};
		String[] srcArray = srcString.split(";");
		String dataTypeString = {0;0;youtube;0;vimeo;0;html5video;0;wistia;0;soundcloud;0;0;0;0;0};
		String[] dataTypeArray = dataTypeString.split(";");
		String dataImageString = {images/big/image1.jpg;images/big/image2.jpg;0;images/big/image3.jpg;http://i.vimeocdn.com/video/447294219_640.jpg;images/big/image4.jpg;http://vjs.zencdn.net/v/oceans.png;images/big/image1.jpg;images/big/wistia_video.jpg;images/big/image2.jpg;images/thumbs/sound_cloud.jpg;images/big/image3.jpg;images/big/image4.jpg;images/big/image1.jpg;images/big/image2.jpg;images/big/image3.jpg};
		String[] dataImageArray = dataImageString.split(";");
		String dataVideoidString = {0;0;A3PDXmYoF5U;0;73234449;0;0;0;9oedgxuciv;0;0;0;0;0;0;0};
		String[] dataVideoidArray = dataVideoidString.split(";");
		String dataVideoogvString={0;0;0;0;0;0;http://vjs.zencdn.net/v/oceans.ogv;0;0;0;0;0;0;0;0;0};
		String[] dataVideoogvArray = dataVideoogvString.split(";");
		String dataVideowebmString = {0;0;0;0;0;0;http://vjs.zencdn.net/v/oceans.webm;0;0;0;0;0;0;0;0;0};
		String[]  dataVideowebmArray = dataVideowebmString.split(";");
		String dataVideomp4String = {0;0;0;0;0;0;http://vjs.zencdn.net/v/oceans.mp4;0;0;0;0;0;0;0;0;0};
		String[] dataVideomp4Array = dataVideomp4String.split(";");
		String dataTrackIdString = {0;0;0;0;0;0;0;0;0;0;8390970;0;0;0;0;0};
		String[] dataTrackIdArray = dataTrackIdString.split(";");
		String dataDescriptionString = {Preview Image 1 Description;Preview Image 2 Description;Preview Image 3 Description;Preview Image 4 Description;Preview Image 5 Description;Preview Image 6 Description;Preview Image 7 Description;Preview Image 8 Description;Preview Image 9 Description;Preview Image 10 Description;Preview Image 11 Description;Preview Image 12 Description;Preview Image 13 Description;Preview Image 14 Description;Preview Image 15 Description;Preview Image 16 Description};
		String[] dataDescriptionArray = dataDescriptionString.split(";");
		for(i=0;i<altString.length();i++) {
			alt = altArray[i];
			src = srcArray[i];
			dataType = dataTypeArray[i];
			dataImage = dataImageArray[i];
			dataVideoID = dataVideoidArray[i];
			dataVideoogv = dataVideoogvArray[i];
			dataVideowebm = dataVideowebmArray[i];
			dataVideomp4 = dataVideomp4Array[i];
			dataTrackID = dataTrackIdArray[i];
			dataDescription = dataDescriptionArray[i];
			list.add(new WebDataProvider(alt,src,dataType,dataImage,dataVideoID,dataVideoogv,dataVideowebm,dataVideomp4,dataTrackID,dataDescription));
			
		}
		return list;
	}

}