# 전기 자동차 코드

import cv2
import matplotlib.pyplot as plt
import matplotlib.image as mpimg


lower_blue = (0, 20, 30)
upper_blue = (50, 255, 255)


img = mpimg.imread("blue3.png", cv2.IMREAD_COLOR)

img_hsv = cv2.cvtColor(img, cv2.COLOR_BGR2HSV)

img_mask = cv2.inRange(img_hsv, lower_blue, upper_blue)

img_result = cv2.bitwise_and(img, img, mask=img_mask)

imgplot = plt.imshow(img_result)

plt.show()
